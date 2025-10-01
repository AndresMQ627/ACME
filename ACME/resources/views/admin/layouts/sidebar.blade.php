 <link href="css/styles.css" rel="stylesheet" />
 <style>/* Sidebar */
.sb-sidenav {
    background: linear-gradient(180deg, #1e1e2f, #2b2b40);
    box-shadow: 2px 0 8px rgba(0, 0, 0, 0.5);
    padding-top: 1rem;
}
.sb-sidenav .nav-link {
    color: #f1f1f1;
    font-size: 0.95rem;
    font-weight: 500;
    padding: 0.75rem 1rem;
    border-radius: 0.4rem;
    display: flex;
    align-items: center;
    transition: all 0.3s ease;
}
.sb-sidenav .nav-link:hover {
    background-color: rgba(0, 188, 212, 0.15);
    color: #00bcd4;
    padding-left: 1.3rem;
}
.sb-sidenav .nav-link.active {
    background-color: #00bcd4;
    color: #fff;
    box-shadow: inset 3px 0 0 #0097a7;
}/
.sb-sidenav .sb-nav-link-icon {
    margin-right: 0.8rem;
    font-size: 1.1rem;
    color: #9aa0ac;
    transition: color 0.3s ease;
}
.sb-sidenav .nav-link:hover .sb-nav-link-icon,
.sb-sidenav .nav-link.active .sb-nav-link-icon {
    color: #fff;
}
.sb-sidenav .nav-heading {
    text-transform: uppercase;
    font-size: 0.75rem;
    color: rgba(255, 255, 255, 0.4);
    padding: 0.75rem 1rem 0.25rem;
    letter-spacing: 1px;
}
</style>
 <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="/dashboard/users">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Usuarios
                            </a>
                            <a class="nav-link" href="/dashboard/planos">
                                <div class="sb-nav-link-icon"><i class="fas fa-paper"></i></div>
                                Planos
                            </a>
                    </div>
                </nav>