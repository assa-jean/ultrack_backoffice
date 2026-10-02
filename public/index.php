<?php
session_start();

// ROUTEUR CENTRAL
$route = $_GET['route'] ?? 'login';

switch ($route) {
    // AUTHENTIFICATION
    case 'login':
        require_once __DIR__ . '/../app/Controllers/AuthController.php';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            login();
        } else {
            showLoginForm();
        }
        break;

    case 'logout':
        require_once __DIR__ . '/../app/Controllers/AuthController.php';
        logout();
        break;

    // BACK-OFFICE (ADMIN)
    case 'dashboard':
        require_once __DIR__ . '/../app/Controllers/DashboardController.php';
        dashboard();
        break;

    case 'flottes':
        require_once __DIR__ . '/../app/Controllers/FlotteController.php';
        overviewFlottes();
        break;

    case 'roles':
        require_once __DIR__ . '/../app/Controllers/RoleController.php';
        manageRoles();
        break;

    case 'add_supervisor':
        require_once __DIR__ . '/../app/Controllers/RoleController.php';
        addSupervisor();
        break;

    case 'update_supervisor':
        require_once __DIR__ . '/../app/Controllers/RoleController.php';
        updateSupervisor();
        break;
    
    case 'agent_pdf':
        require_once __DIR__ . '/../app/Controllers/AgentController.php';
        downloadPdf();
        break;
    
    case 'delete_agent':
        require_once __DIR__ . '/../app/Controllers/AgentController.php';
        deleteAgent();
        break;

    

    

    
}
?>