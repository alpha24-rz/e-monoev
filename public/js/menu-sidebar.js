function sidebar(initialCollapsed) {
    return {
        collapsed: initialCollapsed,
        pauseCollapse: false,
        hoverExpand: true,

        /* =========================
           SINGLE SOURCE OF TRUTH
        ==========================*/
        menus: {
            superAdmin: [
                { id: 1, label: 'Dashboard', icon: '/icons/dashboard-line.svg', href: '/dashboard' },
                { id: 2, label: 'Program Unggulan', icon: '/icons/Frame.svg', href: '/program-unggulan' },
                { id: 3, label: 'Visualisasi Data', icon: '/icons/Frame (1).svg', href: '/visualisasi' },
                { id: 4, label: 'Referensi', icon: '/icons/file-search-line.svg', href: '/referensi' },
            ],
            perencanaan: [
                { id: 5, label: 'RPJMD', icon: '/icons/government-line.svg', href: '/rpjmd' },
                { id: 6, label: 'Program Prioritas', icon: '/icons/bookmark-3-line.svg', href: '/prioritas' },
                { id: 7, label: 'RENSTRA', icon: '/icons/bar-chart-2-line.svg', href: '/renstra' },
                { id: 8, label: 'DPA', icon: '/icons/file-text-line.svg', href: '/dpa' },
                { id: 9, label: 'APBN', icon: '/icons/wallet-2-line.svg', href: '/apbn' },
            ]
        },

        /* =========================
           LIFECYCLE
        ==========================*/
        init() {
            const saved = localStorage.getItem('sidebar-collapsed');
            if (saved !== null) {
                this.collapsed = saved === 'true';
            }

            this.handleMobile();
            this.dispatchToggleEvent();
        },

        /* =========================
           ACTIONS
        ==========================*/
        toggle() {
            if (this.pauseCollapse) return;
            this.collapsed = !this.collapsed;
            this.updateLocalStorage();
            this.dispatchToggleEvent();
        },

        updateLocalStorage() {
            localStorage.setItem('sidebar-collapsed', this.collapsed);
        },

        dispatchToggleEvent() {
            window.dispatchEvent(
                new CustomEvent('sidebar-toggle', {
                    detail: { collapsed: this.collapsed }
                })
            );

            this.$dispatch('sidebar-toggled', {
                collapsed: this.collapsed
            });
        },

        handleMobile() {
            if (window.innerWidth < 768) {
                this.collapsed = true;
                this.hoverExpand = false;
            } else {
                this.hoverExpand = true;
            }
        }
    }
}

/* =========================
   GLOBAL HANDLERS
=========================*/
document.addEventListener('DOMContentLoaded', () => {
    window.toggleSidebar = () => {
        const el = document.querySelector('[x-data^="sidebar"]');
        el?.__x?.$data.toggle();
    };

    window.addEventListener('resize', () => {
        const el = document.querySelector('[x-data^="sidebar"]');
        el?.__x?.$data.handleMobile();
    });
});
