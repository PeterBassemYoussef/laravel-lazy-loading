<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gallery Images</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <style>
        img.lazy {
            display: block;
        }

        .loading {
            background: transparent url({{ asset('assets/images/loading.gif') }}) center center / cover no-repeat;
            width: 100%;
        }

        .loading img {
            width: 100%;
        }
    </style>

</head>

<body>
    <div class="container-fluid">

        @for ($i = 0; $i < 16; $i++)
            @if ($i % 2 == 0)
                <div class="row">
            @endif
            <div class="loading col-6">
                <img data-src="{{ asset('assets/images/' . $i % 16 + 1 . '.jpg') }}" class="lazy rounded-circle"
                    alt="{{ ($i % 16) + 1 }}">
            </div>

            @if ($i != 0 && $i % 2 == 1)
                </div>
                <br />
            @endif
        @endfor

    </div>

    <!-- Bootstrap JS -->
    <script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.lazy.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('.lazy').Lazy({
                scrollDirection: 'vertical',
                effect: 'fadeIn',
                visibleOnly: true,
                onError: function(element) {
                    console.log('error loading ' + element.data('src'));
                }
            });
        });
    </script>
</body>
</body>

</html>
