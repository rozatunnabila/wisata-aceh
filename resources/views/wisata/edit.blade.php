<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Wisata</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            background:#eef2f7;
            font-family:Arial, sans-serif;

            display:flex;
            justify-content:center;
            align-items:center;

            min-height:100vh;

            padding:30px;
        }

        .edit-card{
            width:100%;
            max-width:850px;

            background:white;

            border-radius:30px;

            overflow:hidden;

            box-shadow:0 15px 40px rgba(0,0,0,0.08);
        }

        .edit-image{
            width:100%;
            height:320px;

            object-fit:cover;
        }

        .edit-body{
            padding:35px;
        }

        .edit-title{
            font-size:38px;
            font-weight:800;

            color:#111827;

            margin-bottom:30px;
        }

        .form-label{
            font-weight:700;
            color:#374151;

            margin-bottom:10px;
        }

        .form-control{
            border-radius:15px;

            padding:14px;

            border:1px solid #dbe2ea;
        }

        .form-control:focus{
            box-shadow:none;
            border-color:#111827;
        }

        textarea{
            resize:none;
        }

        .btn-update{
            background:#111827;

            color:white;

            border:none;

            padding:13px 22px;

            border-radius:14px;

            font-weight:700;
        }

        .btn-back{
            background:#e5e7eb;

            color:black;

            text-decoration:none;

            padding:13px 22px;

            border-radius:14px;

            font-weight:700;
        }

        .button-group{
            display:flex;
            gap:12px;

            margin-top:10px;
        }

        @media(max-width:768px){

            .edit-title{
                font-size:28px;
            }

            .edit-image{
                height:230px;
            }

            .edit-body{
                padding:25px;
            }

        }

    </style>

</head>

<body>

    <div class="edit-card">

        <img src="{{ asset('storage/' . $wisata->gambar) }}"
            class="edit-image">

        <div class="edit-body">

            <h1 class="edit-title">
                Edit Wisata
            </h1>

            <form action="/wisata/{{ $wisata->id }}"
                method="POST"
                enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <div class="mb-4">

                    <label class="form-label">
                        Nama Wisata
                    </label>

                    <input type="text"
                        name="nama_wisata"
                        class="form-control"
                        value="{{ $wisata->nama_wisata }}">

                </div>

                <div class="mb-4">

                    <label class="form-label">
                        Lokasi
                    </label>

                    <input type="text"
                        name="lokasi"
                        class="form-control"
                        value="{{ $wisata->lokasi }}">

                </div>

                <div class="mb-4">

                    <label class="form-label">
                        Deskripsi
                    </label>

                    <textarea name="deskripsi"
                        rows="5"
                        class="form-control">{{ $wisata->deskripsi }}</textarea>

                </div>

                <div class="mb-4">

                    <label class="form-label">
                        Ganti Gambar
                    </label>

                    <input type="file"
                        name="gambar"
                        class="form-control">

                </div>

                <div class="button-group">

                    <button type="submit"
                        class="btn-update">

                        Update Wisata

                    </button>

                    <a href="/wisata"
                        class="btn-back">

                        Kembali

                    </a>

                </div>

            </form>

        </div>

    </div>

</body>
</html>