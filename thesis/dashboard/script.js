// JavaScript to show and hide sub-modules
function showModule(module) {
    // Hide all modules
    const modules = document.querySelectorAll('.module');
    modules.forEach(mod => {
        mod.style.display = 'none';
    });

    // Show the selected module
    const activeModule = document.getElementById(module);
    if (activeModule) {
        activeModule.style.display = 'block';
    }
}

// Initialize the dashboard as the default module
window.onload = function() {
    showModule('dashboard');
};
