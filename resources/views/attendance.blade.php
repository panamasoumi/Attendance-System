<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f7f7f7;
            padding: 30px;
        }
        .container {
            max-width: 900px;
        }
        .table th, .table td {
            text-align: center;
        }
        .btn-custom {
            background-color: #4CAF50;
            color: white;
            border: none;
        }
        .btn-custom:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="text-center mb-4">سیستم ثبت تردد کارمندان</h2>
    
    <!-- فرم ثبت تردد -->
    <div class="card mb-4">
        <div class="card-body">
            <form method="POST" action="{{ route('attendance.store') }}">
                @csrf
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="name" class="form-label">نام</label>
                        <input type="text" id="name" name="name" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label for="date" class="form-label">تاریخ</label>
                        <input type="date" id="date" name="date" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="entry" class="form-label">ساعت ورود</label>
                        <input type="time" id="entry" name="entry" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label for="exit" class="form-label">ساعت خروج</label>
                        <input type="time" id="exit" name="exit" class="form-control" required>
                    </div>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-custom">ثبت تردد</button>
                </div>
            </form>
        </div>
    </div>

    <!-- جدول نمایش ترددها -->
    <div class="card">
        <div class="card-body">
            <h4 class="text-center mb-4">لیست ترددها</h4>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>نام</th>
                        <th>تاریخ</th>
                        <th>ساعت ورود</th>
                        <th>ساعت خروج</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($records as $record)
                        <tr>
                            <td>{{ $record->name }}</td>
                            <td>{{ $record->date }}</td>
                            <td>{{ $record->entry }}</td>
                            <td>{{ $record->exit }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
