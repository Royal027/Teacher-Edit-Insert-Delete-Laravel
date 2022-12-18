<!DOCTYPE html>
<html lang="en">

<head>
    <title>Insert Database</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container">

        <form action="{{ route('insert-teacher') }}" method="POST">
            @csrf
            <h2>Muellim Cedveli</h2>
            Muellim: <br>
            <div class="form-group">
                <input type="text" class="form-control" name="muellim">

                Haqqinda: <br>
                <div class="form-group">
                    <textarea name="haqqinda" class="form-control"></textarea>
                </div>
                Tel: <br>
                <div class="form-group">
                    <input type="text" class="form-control" name="tel">

                </div>
                Yas: <br>
                <div class="form-group">
                    <input type="text" class="form-control" name="yas">

                </div>
                <button type="submit " class="btn btn-success">Elave Et</button><br><br>

        </form>
        @if (session('succses'))
            {{ session('succses') }}
        @endif
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Muellim</th>
                    <th>Haqqinda</th>
                    <th>Telefon</th>
                    <th>Yas </th>
                    <th>Stauts</th>
                    <th>OPT</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teachers as $teacher)
                    <tr>
                        <td>{{ $teacher->muellim }}</td>
                        <td>{{ $teacher->haqqinda }}</td>
                        <td>{{ $teacher->tel }}</td>
                        <td>{{ $teacher->yas }}</td>
                        <td>{{ $teacher->status }}</td>
                        <td> <a href="{{ route('delete-teacher', $teacher->id) }}" class="btn btn-danger">Sil</a>
                            <a href="{{ route('make-teacher', $teacher->id) }}" class="btn btn-primary">Duzelt</a>
                        </td>


                    </tr>
                @endforeach


            </tbody>

        </table>
    </div>

</body>

</html>
