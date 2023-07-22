<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="Start your development with Meyawo landing page.">
   <meta name="author" content="Devcrud">
   <title>Download Link</title>
   <!-- font icons -->
   <link rel="stylesheet" href="{{asset('assets/vendors/themify-icons/css/themify-icons.css')}}">
   <link rel="stylesheet" href="{{asset('assets/vendors/fontawesome-free-6.4.0-web/css/all.css')}}">
   
   <!-- Bootstrap + Steller  -->
   <link rel="stylesheet" href="{{asset('assets/css/meyawo.css')}}">
</head>
<body>

   <!-- Page Header -->
   <header class="header header-mini">

      <div class="header-title">Download Link</div>
          @if (session('success'))
        <div>{{ session('success') }}</div>
        @endif

      <nav aria-label="breadcrumb" class="mt-4">
        <div class="container">
            <table class="table table-bordered ">
                <thead style="background-color: #493e74; color: beige;">
                   <tr>
                      <!-- <th scope="col">#</th> -->
                      <th scope="col">File Name</th>
                      <th scope="col">File Type</th>
                      <th scope="col">File Size</th>
                      <th scope="col">Download Link</th>
                   </tr>
                </thead>
                <tbody style="background-color: #4caf5069; color: beige;">
                    <tr>
                      <!-- <th scope="row">{{ $files->id }}</th> -->
                      <td>{{ $files->file_name }}</td>
                      <td>{{ $files->file_type }}</td>
                      <td>{{ $files->file_size }}</td>
                      <td>
                     <a   href="{{ route('file.download', $files->id) }}"><i class="fa-solid fa-download" style="color: #493e74; margin-right: 10px;"></i></a>
                     <a id="copyButton" href="{{ route('file.download', $files->id) }}"><i class="fa-solid fa-copy" style="color: #493e74;"></i></a>
                     </td>
                   </tr>
                </tbody>
             </table>
           </div>


      </nav>
   </header> <!-- End Of Page Header -->

   <!-- main content -->

   <!-- footer -->
    <div class="container mt-5">
        <footer class="footer">
            <p class="mb-0">Copyright <script>document.write(new Date().getFullYear())</script> &copy; <a href="http://www.mansour.com">Mohammed Mansour</a></p>
            <div class="social-links text-right m-auto ml-sm-auto">
                <a href="javascript:void(0)" class="link"><i class="ti-github"></i></a>
                <a href="javascript:void(0)" class="link"><i class="ti-facebook"></i></a>
                <a href="javascript:void(0)" class="link"><i class="ti-twitter-alt"></i></a>
                <a href="javascript:void(0)" class="link"><i class="ti-google"></i></a>
                <a href="javascript:void(0)" class="link"><i class="ti-pinterest-alt"></i></a>
                <a href="javascript:void(0)" class="link"><i class="ti-instagram"></i></a>
                <a href="javascript:void(0)" class="link"><i class="ti-rss"></i></a>
            </div>
        </footer>
    </div> <!-- end of page footer -->

   <!-- core  -->
   <script src="{{asset('assets/vendors/jquery/jquery-3.4.1.js')}}"></script>
   <script src="{{asset('assets/vendors/bootstrap/bootstrap.bundle.js')}}"></script>
   <script src="{{asset('assets/vendors/fontawesome-free-6.4.0-web/js/all.js')}}"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.8/clipboard.min.js"></script>
   <script>
    document.addEventListener('DOMContentLoaded', function() {
        var copyButton = document.getElementById('copyButton');
        var linkToCopy = "{{ route('file.download', $files->id) }}";

        var clipboard = new ClipboardJS(copyButton, {
            text: function() {
                return linkToCopy;
            }
        });

        clipboard.on('success', function(e) {
            alert('Copied!');
        });

        clipboard.on('error', function(e) {
            alert('Faild!');
        });
    });
</script>
</body>
</html>
