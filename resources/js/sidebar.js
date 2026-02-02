import './sidebar';

document.addEventListener('alpine:init', () => {
    Alpine.data('sidebar', (initialCollapsed = false) => ({
        collapsed: initialCollapsed,
        hoverExpand: true,

        menus: {
            superAdmin: [
                { id: 1, label: 'Dashboard', icon: '/icons/dashboard-line.svg', href: '/dashboard' },
                { id: 2, label: 'Program Unggulan', icon: '/icons/Frame.svg', href: '/program-unggulan' },
                {
                    id: 3, label: 'Visualisasi Data', icon: '/icons/Frame (1).svg', href: '/visualisasi',
                    children: [
                        { id: '3-1', label: 'Progres Triwulan', href: '/users' },
                        { id: '3-2', label: 'Capaian Kinerja', href: '/roles' },
                        { id: '3-3', label: 'Daftar Alokasi', href: '/roles' },
                        { id: '3-4', label: 'Peringkat SKPD', href: '/roles' },
                        { id: '3-5', label: 'Mapping Paket', href: '/roles' },
                    ]
                },
                {
                    id: 4, label: 'Referensi', icon: '/icons/file-search-line.svg', href: '/referensi',
                    children: [
                        { id: '4-1', label: 'Sub Kegiatan', href: '/users' },
                        { id: '4-2', label: 'DAK', href: '/roles' },
                        { id: '4-3', label: 'Jenis Belanja', href: '/roles' },
                        { id: '4-4', label: 'Sumber Dana', href: '/roles' },
                        { id: '4-5', label: 'Metode Pelaksanaan', href: '/roles' },
                        { id: '4-6', label: 'IKU', href: '/roles' },

                    ]
                },
            ],
            perencanaan: [
                { id: 5, label: 'RPJMD', icon: '/icons/government-line.svg', href: '/rpjmd' },
                { id: 6, label: 'Program Prioritas', icon: '/icons/bookmark-3-line.svg', href: '/prioritas' },
                { id: 7, label: 'RENSTRA', icon: '/icons/bar-chart-2-line.svg', href: '/renstra' },
                { id: 8, label: 'DPA', icon: '/icons/file-text-line.svg', href: '/dpa' },
                { id: 9, label: 'APBN', icon: '/icons/wallet-2-line.svg', href: '/apbn' },
            ]
        },

        init() {
            const saved = localStorage.getItem('sidebar-collapsed');
            if (saved !== null) {
                this.collapsed = saved === 'true';
            }

            this.handleMobile();
            this.dispatchToggle();
        },

        toggle() {
            this.collapsed = !this.collapsed;
            localStorage.setItem('sidebar-collapsed', this.collapsed);
            this.dispatchToggle();
        },

        dispatchToggle() {
            window.dispatchEvent(
                new CustomEvent('sidebar-toggle', {
                    detail: { collapsed: this.collapsed }
                })
            );
        },

        handleMobile() {
            if (window.innerWidth < 768) {
                this.collapsed = true;
                this.hoverExpand = false;
            } else {
                this.hoverExpand = true;
            }
        }
    }));
});

/* GLOBAL */
window.addEventListener('resize', () => {
    const sidebar = document.querySelector('[x-data^="sidebar"]');
    sidebar?.__x?.$data.handleMobile();
});
