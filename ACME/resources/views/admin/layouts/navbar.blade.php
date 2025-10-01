<link href="css/styles.css" rel="stylesheet" />
<style>/* Navbar general */
.sb-topnav {
    background: linear-gradient(90deg, #1e1e2f, #2b2b40);
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.4);
    padding: 0.5rem 1rem;
}

/* Marca */
.sb-topnav .navbar-brand {
    font-size: 1.3rem;
    font-weight: bold;
    color: #f8f9fa !important;
    letter-spacing: 1px;
    transition: color 0.3s ease;
}

.sb-topnav .navbar-brand:hover {
    color: #00bcd4 !important;
}

/* Texto administrador */
.sb-topnav .input-group h4 {
    color: #f1f1f1;
    margin: 0;
    font-size: 1rem;
    font-weight: 400;
    padding-left: 1rem;
}

/* Ícono de usuario */
.sb-topnav .nav-link {
    color: #f8f9fa !important;
    transition: transform 0.2s ease, color 0.3s ease;
}

.sb-topnav .nav-link:hover {
    color: #00bcd4 !important;
    transform: scale(1.1);
}

/* Dropdown */
.sb-topnav .dropdown-menu {
    background-color: #2b2b40;
    border: none;
    border-radius: 0.5rem;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.6);
}

.sb-topnav .dropdown-item {
    color: #f8f9fa;
    transition: background 0.3s ease, padding-left 0.2s ease;
}

.sb-topnav .dropdown-item:hover {
    background-color: #00bcd4;
    color: #fff;
    padding-left: 1.5rem;
}

/* Divider */
.sb-topnav .dropdown-divider {
    border-top: 1px solid rgba(255, 255, 255, 0.2);
}
</style>
 <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="/dashboard">ACME Arquitectos</a>
            <!-- Navbar Search-->
                <div class="input-group">
                    <h4 style="margin-left: 1rem;">Administrador</h4>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>

                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>