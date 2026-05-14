<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Explore Aceh</title>

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
        }

        .wrapper{
            width:100%;
            min-height:100vh;
        }

        .hero{
            position:relative;
            height:340px;

            background:
            linear-gradient(rgba(0,0,0,0.35),
            rgba(0,0,0,0.35)),

            url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?q=80&w=1600&auto=format&fit=crop');

            background-size:cover;
            background-position:center;

            color:white;

            overflow:hidden;
        }

        .top-nav{
            display:flex;
            justify-content:space-between;
            align-items:center;

            padding:25px 50px;
        }

        .logo{
            font-size:26px;
            font-weight:800;
            letter-spacing:1px;
        }

        .btn-add{
            border:none;

            background:rgba(255,255,255,0.2);

            backdrop-filter:blur(10px);

            color:white;

            padding:10px 18px;

            border-radius:18px;

            font-weight:700;

            transition:0.3s;
        }

        .btn-add:hover{
            background:white;
            color:black;
        }

        .hero-content{
            position:absolute;

            left:50%;
            top:50%;

            transform:translate(-50%,-50%);

            text-align:center;

            width:100%;
            padding:20px;
        }

        .hero-title{
            font-size:52px;
            font-weight:900;
            letter-spacing:2px;

            text-shadow:0 5px 20px rgba(0,0,0,0.3);
        }

        .hero-subtitle{
            margin-top:15px;

            font-size:15px;

            letter-spacing:1px;

            opacity:0.95;
        }

        .section{
            padding:50px 70px;
        }

        .section-title{
            text-align:center;

            font-size:42px;
            font-weight:800;

            color:#111827;

            margin-bottom:10px;
        }

        .section-subtitle{
            text-align:center;

            color:#6b7280;

            margin-bottom:45px;
        }

        .discover-title{
            text-align:center;

            font-size:55px;
            font-weight:300;

            color:#111827;

            margin-bottom:10px;
        }

        .discover-subtitle{
            text-align:center;

            color:#6b7280;

            margin-bottom:40px;
        }

        .wisata-grid{
            display:grid;

            grid-template-columns:repeat(3,1fr);

            gap:22px;
        }

        .wisata-card{
            position:relative;

            overflow:hidden;

            border-radius:24px;

            height:320px;

            box-shadow:0 10px 25px rgba(0,0,0,0.08);

            transition:0.3s;
        }

        .wisata-card:hover{
            transform:translateY(-8px);
        }

        .wisata-card img{
            width:100%;
            height:100%;

            object-fit:cover;
        }

        .overlay{
            position:absolute;
            inset:0;

            background:linear-gradient(to top,
            rgba(0,0,0,0.8),
            transparent);
        }

        .wisata-info{
            position:absolute;

            bottom:20px;
            left:20px;
            right:20px;

            color:white;
        }

        .wisata-info h4{
            font-size:22px;
            font-weight:800;

            margin-bottom:8px;
        }

        .wisata-info p{
            font-size:13px;

            opacity:0.9;

            margin-bottom:15px;
        }

        .btn-group-custom{
            display:flex;
            gap:10px;
        }

        .btn-detail{
            background:white;

            color:black;

            border:none;

            padding:8px 15px;

            border-radius:10px;

            font-weight:700;

            font-size:13px;
        }

        .btn-edit{
            background:#facc15;

            color:black;

            border:none;

            padding:8px 15px;

            border-radius:10px;

            text-decoration:none;

            font-weight:700;

            font-size:13px;
        }

        .btn-delete{
            background:#ef4444;

            color:white;

            border:none;

            padding:8px 15px;

            border-radius:10px;

            font-weight:700;

            font-size:13px;
        }

        .modal-backdrop.show{
            backdrop-filter:blur(8px);
            background:rgba(0,0,0,0.35);
        }

        .modal-content{
            border:none;

            border-radius:28px;

            overflow:hidden;
        }

        .form-control{
            border-radius:14px;
            padding:12px;
        }

        .form-control:focus{
            box-shadow:none;
            border-color:#111827;
        }

        .btn-save{
            width:100%;

            background:#111827;

            color:white;

            border:none;

            padding:13px;

            border-radius:14px;

            font-weight:700;
        }

        @media(max-width:992px){

            .wisata-grid{
                grid-template-columns:1fr 1fr;
            }

        }

        @media(max-width:768px){

            .top-nav{
                padding:20px;
            }

            .hero{
                height:260px;
            }

            .hero-title{
                font-size:38px;
            }

            .hero-subtitle{
                font-size:13px;
            }

            .section{
                padding:40px 20px;
            }

            .wisata-grid{
                grid-template-columns:1fr;
            }

            .discover-title{
                font-size:42px;
            }

        }

    </style>

</head>

<body>

<div class="wrapper">

    <section class="hero">

        <div class="top-nav">

            <div class="logo">
                ACEH TOUR
            </div>

            <button class="btn-add"
                data-bs-toggle="modal"
                data-bs-target="#tambahModal">

                + Tambah Wisata

            </button>

        </div>

        <div class="hero-content">

            <h1 class="hero-title">
                WHERE NEXT?
            </h1>

            <p class="hero-subtitle">
                SPECIAL BEAUTIFUL DESTINATION IN ACEH
            </p>

        </div>

    </section>

    <section class="section">

        <h2 class="section-title">
            Explore Aceh
        </h2>

        <p class="section-subtitle">
            Beautiful destinations and hidden paradise
        </p>

        <div class="wisata-grid">

            @foreach($wisata as $w)

            <div class="wisata-card">

                <img src="{{ asset('storage/' . $w->gambar) }}">

                <div class="overlay"></div>

                <div class="wisata-info">

                    <h4>
                        {{ $w->nama_wisata }}
                    </h4>

                    <p>
                        📍 {{ $w->lokasi }}
                    </p>

                    <div class="btn-group-custom">

                        <button class="btn-detail"
                            data-bs-toggle="modal"
                            data-bs-target="#detail{{ $w->id }}">

                            Detail

                        </button>

                        <a href="/wisata/{{ $w->id }}/edit"
                            class="btn-edit">

                            Edit

                        </a>

                        <form action="/wisata/{{ $w->id }}"
                            method="POST">

                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                class="btn-delete">

                                Delete

                            </button>

                        </form>

                    </div>

                </div>

            </div>

            <div class="modal fade"
                id="detail{{ $w->id }}"
                tabindex="-1">

                <div class="modal-dialog modal-dialog-centered modal-lg">

                    <div class="modal-content">

                        <img src="{{ asset('storage/' . $w->gambar) }}"
                            style="
                            width:100%;
                            height:350px;
                            object-fit:cover;
                        ">

                        <div class="p-4">

                            <h2 class="fw-bold mb-3">
                                {{ $w->nama_wisata }}
                            </h2>

                            <p class="text-secondary mb-3">
                                📍 {{ $w->lokasi }}
                            </p>

                            <p style="line-height:1.9;">
                                {{ $w->deskripsi }}
                            </p>

                        </div>

                    </div>

                </div>

            </div>

            @endforeach

        </div>

    </section>

</div>

<div class="modal fade"
    id="tambahModal"
    tabindex="-1">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">

            <div class="modal-body p-4">

                <h3 class="mb-4 fw-bold">
                    Tambah Wisata
                </h3>

                <form action="/wisata"
                    method="POST"
                    enctype="multipart/form-data">

                    @csrf

                    <div class="mb-3">

                        <label class="mb-2">
                            Nama Wisata
                        </label>

                        <input type="text"
                            name="nama_wisata"
                            class="form-control">

                    </div>

                    <div class="mb-3">

                        <label class="mb-2">
                            Lokasi
                        </label>

                        <input type="text"
                            name="lokasi"
                            class="form-control">

                    </div>

                    <div class="mb-3">

                        <label class="mb-2">
                            Deskripsi
                        </label>

                        <textarea name="deskripsi"
                            rows="4"
                            class="form-control"></textarea>

                    </div>

                    <div class="mb-4">

                        <label class="mb-2">
                            Upload Gambar
                        </label>

                        <input type="file"
                            name="gambar"
                            class="form-control">

                    </div>

                    <button type="submit"
                        class="btn-save">

                        Simpan Wisata

                    </button>

                </form>

            </div>

        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>