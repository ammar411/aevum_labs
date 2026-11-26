import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    const navbar = document.getElementById('navbar');
    const scrollProgress = document.getElementById('scrollProgress');
    const menuToggle = document.querySelector('.menu-toggle');
    const navigation = document.getElementById('primary-navigation');
    const auditDialog = document.getElementById('audit-modal');

    const updateScrollState = () => {
        navbar?.classList.toggle('shrink', window.scrollY > 24);
        if (scrollProgress) {
            const scrollableHeight = document.documentElement.scrollHeight - window.innerHeight;
            const progress = scrollableHeight > 0 ? (window.scrollY / scrollableHeight) * 100 : 0;
            scrollProgress.style.width = `${Math.min(progress, 100)}%`;
        }
    };

    updateScrollState();
    window.addEventListener('scroll', updateScrollState, { passive: true });

    menuToggle?.addEventListener('click', () => {
        const isExpanded = menuToggle.getAttribute('aria-expanded') === 'true';
        menuToggle.setAttribute('aria-expanded', String(!isExpanded));
        menuToggle.setAttribute('aria-label', isExpanded ? 'Open navigation' : 'Close navigation');
        navigation?.classList.toggle('is-open', !isExpanded);
    });

    navigation?.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', () => {
            navigation.classList.remove('is-open');
            menuToggle?.setAttribute('aria-expanded', 'false');
            menuToggle?.setAttribute('aria-label', 'Open navigation');
        });
    });

    document.querySelectorAll('[data-open-audit]').forEach((trigger) => {
        trigger.addEventListener('click', () => {
            if (auditDialog instanceof HTMLDialogElement) auditDialog.showModal();
        });
    });

    document.querySelectorAll('[data-close-audit]').forEach((trigger) => {
        trigger.addEventListener('click', (event) => {
            if (auditDialog instanceof HTMLDialogElement) auditDialog.close();
            if (trigger.matches('a')) {
                event.preventDefault();
                window.location.href = trigger.href;
            }
        });
    });

    auditDialog?.addEventListener('click', (event) => {
        if (event.target === auditDialog) auditDialog.close();
    });
});
