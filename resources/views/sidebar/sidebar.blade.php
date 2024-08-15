<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar With Bootstrap</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
</head>
<body>
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <div class="sidebar-logo">
                    <a href="#">Grading System</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="item-titles">
                    <a class= "titles"> REGISTRAR </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{ route('dashboard') }}" class="sidebar-link">
                        <i class="lni lni-grid-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lnr lnr-calendar-full"></i>
                        <span>Semester</span>
                    </a>
                </li>
                <li class="item-titles">
                    <a class= "titles"> DEPARTMENT SECTION </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#dep" aria-expanded="false" aria-controls="dep">
                        <i class="lnr lnr-list"></i>
                        <span>Departments</span>
                    </a>
                    <ul id="dep" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Manage Departments</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Faculty</a>
                        </li>
                    </ul>
                </li>
                <li class="item-titles">
                    <a class= "titles"> STUDENT SECTION </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#stud" aria-expanded="false" aria-controls="stud">
                        <i class="material-symbols-outlined">
                        groups
                        </i>
                        <span>Students</span>
                    </a>
                    <ul id="stud" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Manage Students</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Subject</a>
                        </li>
                    </ul>
                </li>
                <li class="item-titles">
                    <a class= "titles"> GRADING SECTION </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                    <i class="material-symbols-outlined">
                    edit_square
                    </i>
                        <span>Grading</span>
                    </a>
                </li>
            </ul>
        </aside>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>
</html>
