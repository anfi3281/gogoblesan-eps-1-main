<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/daisyui@2.49.0/dist/full.css"
      rel="stylesheet"
      type="text/css"
    />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Challenge EPS 1 #Gogoblesan</title>
    <style>
    #targetObject{
      <?php if(isset($_POST['submit'])){?>
      background-color: <?php echo $_POST['input'];?>;
      <?php } else {
      }?>
    }
    </style>
  </head>
  <body>
    <section class="container mx-auto">
      <div class="w-80 mx-auto p-2">
        <div class="alert alert-warning shadow-lg">
          <div>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              class="stroke-current flex-shrink-0 w-6 h-6"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
              ></path>
            </svg>
            <p class="text-center">
              Tugas EPS 1 - #GOGOGBLESAN Dea Afrizal
            </p>
          </div>
        </div>
      </div>
      <div class="hero-content mx-auto">
        <div class="flex-column items-center">
          <div class="mb-2">
            <div
              class="card w-96 bg-primary text-primary-content"
              id="targetObject"
            >
              <div class="card-body">
                <h2 class="card-title">Latar Dinamis</h2>
                <p>
                  Ubah warna latar ini menjadi dinamis sesuai keinginan pengguna
                </p>
              </div>
            </div>
          </div>
          <div class="form-control w-full max-w-xs mx-auto">
            <label class="label">
              <span class="label-text">warna baru</span>
              <span class="label-text-alt">contoh: #7b1111 atau red,blue</span>
            </label>
            <form action="index.php" method="post">
              <input
                type="text"
                placeholder="masukan disini"
                class="input input-bordered w-full max-w-xs mb-4"
                id="inputHexa" name="input"
              />
          </div>
          <button type="submit"
            class="inline-block cursor-pointer rounded-md bg-primary px-4 py-3 text-center text-sm font-semibold uppercase text-white transition duration-200 ease-in-out hover:bg-white hover:text-primary mx-auto w-full"
            onClick="ubahLatar()" name="submit"
          >
          Ubah Warna Latar Objek
          </button>
          </form>
        </div>
      </div>
    </section>
    <script src="main.js"></script>
  </body>
</html>
