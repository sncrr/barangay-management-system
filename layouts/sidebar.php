<?php

function isActive($route)
{
    $currentRoute = $_SERVER['REQUEST_URI'];

    // Check if the current route matches the given route
    if (str_contains($currentRoute, 'admin'  . $route)) {
        return 'active'; // Return "active" class if the route matches
    }

    return '';
}

?>

<nav class="sidebar">
    <div class="header">

    </div>
    <div class="nav-list">
        <div class="nav-item">
            <a href="#" class="nav-link">
                <div class="nav-icon">
                    <i class="fas fa-home"></i>
                </div>
                <div class="nav-label">
                    <div>Dashboard</div>
                </div>
            </a>
        </div>
        <div class="nav-item">
            <a href="#" class="nav-link">
                <div class="nav-icon">
                    <i class="fas fa-users"></i>
                </div>
                <div class="nav-label">
                    <div>Population</div>
                </div>
            </a>
            <div class="nav-child">
                <div class="nav-item">
                    <a href="/admin/population/residents" class="nav-link">
                        <div class="nav-label">
                            <div>Residents</div>
                        </div>
                    </a>
                </div>
                <div class="nav-item">
                    <a href="/admin/population/household" class="nav-link">
                        <div class="nav-label">
                            <div>Household</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="nav-item">
            <a href="#" class="nav-link">
                <div class="nav-icon">
                    <i class="fas fa-scroll"></i>
                </div>
                <div class="nav-label">
                    <div>Certifications</div>
                </div>
            </a>
            <div class="nav-child">
                <div class="nav-item <?php echo isActive('/certificates/clearance') ?>">
                    <a href="/admin/certificates/clearance" class="nav-link">
                        <div class="nav-label">
                            <div>Barangay Clearance</div>
                        </div>
                    </a>
                </div>
                <div class="nav-item <?php echo isActive('/certificates/indigency') ?>">
                    <a href="/admin/certificates/indigency" class="nav-link">
                        <div class="nav-label">
                            <div>Barangay Indigency </div>
                        </div>
                    </a>
                </div>
                <div class="nav-item <?php echo isActive('/certificates/residency') ?>">
                    <a href="/admin/certificates/residency" class="nav-link">
                        <div class="nav-label">
                            <div>Certificate of Residency</div>
                        </div>
                    </a>
                </div>

                <div class="nav-item">
                    <a href="#" class="nav-link">
                        <div class="nav-label">
                            <div>Business Permit</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="nav-item">
            <a href="#" class="nav-link">
                <div class="nav-icon">
                    <i class="fas fa-newspaper"></i>
                </div>
                <div class="nav-label">
                    <div>Disputes</div>
                </div>
            </a>
            <div class="nav-child">
                <div class="nav-item">
                    <a href="#" class="nav-link">
                        <div class="nav-label">
                            <div>Incidents</div>
                        </div>
                    </a>
                </div>
                <div class="nav-item">
                    <a href="#" class="nav-link">
                        <div class="nav-label">
                            <div>Complaints</div>
                        </div>
                    </a>
                </div>
                <div class="nav-item">
                    <a href="#" class="nav-link">
                        <div class="nav-label">
                            <div>Cases</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="nav-item">
            <a href="#" class="nav-link">
                <div class="nav-icon">
                    <i class="fas fa-calendar"></i>
                </div>
                <div class="nav-label">
                    <div>Events and Announcements</div>
                </div>
            </a>
            <div class="nav-child">
                <div class="nav-item">
                    <a href="#" class="nav-link">
                        <div class="nav-label">
                            <div>Events</div>
                        </div>
                    </a>
                </div>
                <div class="nav-item">
                    <a href="#" class="nav-link">
                        <div class="nav-label">
                            <div>Announcements</div>
                        </div>
                    </a>
                </div>
                <div class="nav-item">
                    <a href="#" class="nav-link">
                        <div class="nav-label">
                            <div>Barangay Calendar</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="toggle">
        X
    </div>
</nav>