<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <form action="{{ route('edit-teacher', $teacher->id) }}" method="POST">
            @csrf
            <h2>{{ $teacher->muellim }}Teachers Edit</h2>
            Muellim: <br>
            <div class="form-group">
                <input type="text" class="form-control" value="{{ $teacher->muellim }}" name="muellim">
            </div>
            Haqqinda: <br>
            <div class="form-group">
                <textarea name="haqqinda" class="form-control">{{ $teacher->haqqinda }}</textarea>
            </div>
            Tel: <br>
            <div class="form-group">
                <input type="text" class="form-control" name="tel" value="{{ $teacher->tel }}">

            </div>
            Yas: <br>
            <div class="form-group">
                <input type="text" class="form-control" value="{{ $teacher->yas }}" name="yas">

            </div>
            Status: <br>
            <div class="form-group">
                <select name="status" id="">
                    <option value="isleyir" @if ($teacher->status == 'isleyir') selected @endif>isleyir</option>
                    <option value="islemir" @if ($teacher->status == 'islemir') selected @endif>islemir</option>

                </select>

            </div>
            <button type="submit " class="btn btn-success">Update</button><br><br>

        </form>
    </div>
</body>

</html>
