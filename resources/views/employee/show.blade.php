<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle }}</title>
    @vite('resources/sass/app.scss')
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
        <div class="container">
            <a href="{{ route('home') }}" class="navbar-brand mb-0 h1">
                <i class="bi-hexagon-fill me-2"></i> Data Master
            </a>

            <div class="navbar-nav">
                <a href="{{ route('home') }}" class="nav-link">Home</a>
                <a href="{{ route('employees.index') }}" class="nav-link active">
                    Employee List
                </a>
            </div>

            <a href="{{ route('profile') }}" class="btn btn-outline-light">
                <i class="bi-person-circle me-1"></i> My Profile
            </a>
        </div>
    </nav>

    <div class="container-sm my-5">
        <div class="row justify-content-center">
            <div class="p-5 bg-light rounded-3 col-xl-4 border">

                <div class="mb-3 text-center">
                    <i class="bi-person-circle fs-1"></i>
                    <h4>Detail Employee</h4>
                </div>

                <hr>

                <div class="mb-3">
                    <label class="form-label">First Name</label>
                    <h5>{{ $employee->firstname }}</h5>
                </div>

                <div class="mb-3">
                    <label class="form-label">Last Name</label>
                    <h5>{{ $employee->lastname }}</h5>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <h5>{{ $employee->email }}</h5>
                </div>

                <div class="mb-3">
                    <label class="form-label">Age</label>
                    <h5>{{ $employee->age }}</h5>
                </div>

                <div class="mb-3">
                    <label class="form-label">Position</label>
                    <h5>{{ $employee->position_name }}</h5>
                </div>

                <hr>

                <a href="{{ route('employees.index') }}"
                    class="btn btn-outline-dark btn-lg w-100 mt-3">
                    <i class="bi-arrow-left-circle me-2"></i> Back
                </a>

            </div>
        </div>
    </div>

    @vite('resources/js/app.js')
</body>
</html>
