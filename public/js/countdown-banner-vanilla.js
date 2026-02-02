/**
 * COUNTDOWN BANNER - VANILLA JAVASCRIPT VERSION
 */

// Store all countdown instances
const countdownInstances = new Map();

class CountdownBanner {
    constructor(bannerId) {
        this.bannerId = bannerId;
        this.bannerElement = document.getElementById(`countdownBanner-${bannerId}`);
        
        if (!this.bannerElement) return;
        
        // Get data from element
        this.deadline = this.bannerElement.dataset.deadline;
        this.title = this.bannerElement.dataset.title;
        this.show = this.bannerElement.dataset.show === 'true';
        
        // Get display elements
        this.daysElement = document.getElementById(`days-${bannerId}`);
        this.hoursElement = document.getElementById(`hours-${bannerId}`);
        this.minutesElement = document.getElementById(`minutes-${bannerId}`);
        this.secondsElement = document.getElementById(`seconds-${bannerId}`);
        this.inputButton = document.getElementById(`inputBtn-${bannerId}`);
        this.closeButton = document.getElementById(`closeBtn-${bannerId}`);
        
        // State
        this.isExpired = false;
        this.intervalId = null;
        
        // Initialize
        this.init();
    }
    
    init() {
        // Check localStorage for hidden state
        const bannerHidden = localStorage.getItem(`countdownBannerHidden_${this.bannerId}`);
        if (bannerHidden === 'true') {
            this.hide();
            return;
        }
        
        // Setup event listeners
        this.setupEventListeners();
        
        // Start countdown
        this.startCountdown();
    }
    
    setupEventListeners() {
        // Input button click
        if (this.inputButton) {
            this.inputButton.addEventListener('click', (e) => {
                e.preventDefault();
                this.openInputForm();
            });
        }
        
        // Close button click
        if (this.closeButton) {
            this.closeButton.addEventListener('click', (e) => {
                e.preventDefault();
                this.hide();
            });
        }
    }
    
    startCountdown() {
        const deadlineTime = new Date(this.deadline).getTime();
        
        // Update immediately
        this.updateCountdown(deadlineTime);
        
        // Update every second
        this.intervalId = setInterval(() => {
            this.updateCountdown(deadlineTime);
        }, 1000);
    }
    
    updateCountdown(deadlineTime) {
        const now = new Date().getTime();
        const timeLeft = deadlineTime - now;
        
        if (timeLeft < 0) {
            this.isExpired = true;
            this.updateDisplay(0, 0, 0, 0);
            this.onExpired();
            clearInterval(this.intervalId);
            return;
        }
        
        const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
        const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);
        
        this.updateDisplay(days, hours, minutes, seconds);
    }
    
    updateDisplay(days, hours, minutes, seconds) {
        if (this.daysElement) this.daysElement.textContent = this.padNumber(days);
        if (this.hoursElement) this.hoursElement.textContent = this.padNumber(hours);
        if (this.minutesElement) this.minutesElement.textContent = this.padNumber(minutes);
        if (this.secondsElement) this.secondsElement.textContent = this.padNumber(seconds);
    }
    
    padNumber(num) {
        return num.toString().padStart(2, '0');
    }
    
    onExpired() {
        // Optional: Change button style when expired
        if (this.inputButton) {
            this.inputButton.classList.remove('bg-blue-500', 'hover:bg-blue-400');
            this.inputButton.classList.add('bg-gray-500', 'cursor-not-allowed');
            this.inputButton.disabled = true;
        }
        
        // Dispatch custom event
        this.dispatchEvent('countdown-expired');
    }
    
    openInputForm() {
        if (this.isExpired) {
            this.showNotification('Waktu penginputan telah berakhir!', 'error');
            return;
        }
        
        // Dispatch custom event
        this.dispatchEvent('open-input-form', {
            bannerId: this.bannerId,
            title: this.title,
            deadline: this.deadline
        });
        
        // Default action
        this.showNotification('Membuka form penginputan...', 'info');
    }
    
    hide() {
        this.bannerElement.style.display = 'none';
        localStorage.setItem(`countdownBannerHidden_${this.bannerId}`, 'true');
        this.dispatchEvent('banner-hidden');
        
        if (this.intervalId) {
            clearInterval(this.intervalId);
        }
    }
    
    show() {
        this.bannerElement.style.display = 'block';
        localStorage.removeItem(`countdownBannerHidden_${this.bannerId}`);
        this.dispatchEvent('banner-shown');
    }
    
    showNotification(message, type = 'info') {
        // Use your app's notification system or console
        const event = new CustomEvent('countdown-notification', {
            detail: { message, type, bannerId: this.bannerId }
        });
        window.dispatchEvent(event);
        
        // Fallback to console
        console.log(`[Countdown ${this.bannerId}]: ${message}`);
    }
    
    dispatchEvent(eventName, detail = {}) {
        const event = new CustomEvent(`countdown-${eventName}`, {
            detail: { ...detail, bannerId: this.bannerId }
        });
        window.dispatchEvent(event);
    }
    
    destroy() {
        if (this.intervalId) {
            clearInterval(this.intervalId);
        }
        countdownInstances.delete(this.bannerId);
    }
}

// Initialize function called from blade template
function initializeCountdownBanner(bannerId) {
    if (!countdownInstances.has(bannerId)) {
        const instance = new CountdownBanner(bannerId);
        if (instance.bannerElement) {
            countdownInstances.set(bannerId, instance);
        }
    }
}

// Global API for controlling banners
window.CountdownBanner = {
    // Get instance by ID
    getInstance(bannerId) {
        return countdownInstances.get(bannerId);
    },
    
    // Hide all banners
    hideAll() {
        countdownInstances.forEach(instance => instance.hide());
    },
    
    // Show all banners
    showAll() {
        countdownInstances.forEach(instance => instance.show());
    },
    
    // Reset specific banner
    reset(bannerId) {
        const instance = countdownInstances.get(bannerId);
        if (instance) {
            localStorage.removeItem(`countdownBannerHidden_${bannerId}`);
            instance.show();
        }
    },
    
    // Destroy specific banner
    destroy(bannerId) {
        const instance = countdownInstances.get(bannerId);
        if (instance) {
            instance.destroy();
        }
    },
    
    // Check if banner is expired
    isExpired(bannerId) {
        const instance = countdownInstances.get(bannerId);
        return instance ? instance.isExpired : false;
    }
};

// Auto-initialize all banners on page load
document.addEventListener('DOMContentLoaded', function() {
    const banners = document.querySelectorAll('[id^="countdownBanner-"]');
    banners.forEach(banner => {
        const bannerId = banner.id.replace('countdownBanner-', '');
        initializeCountdownBanner(bannerId);
    });
});

// Event listeners for custom integration
window.addEventListener('countdown-open-input-form', function(event) {
    console.log('Open input form event:', event.detail);
    // Add your custom form opening logic here
});

window.addEventListener('countdown-banner-hidden', function(event) {
    console.log('Banner hidden:', event.detail);
});

window.addEventListener('countdown-expired', function(event) {
    console.log('Countdown expired:', event.detail);
});