<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <title>Document</title>
  </head>
  <body>
    <div>
      <h2>MansourCloud For File Sharing Servic</h2>
      <p class="lead">Now you can upload and share your files Easily</b></p>

      <!-- Upload  -->
      <form id="file-upload-form" class="uploader"  action="{{ url('/upload') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input
          id="file-upload"
          type="file"
          name="file"

        />

        <label for="file-upload" id="file-drag">
          {{-- <img id="file-image" src="#" alt="Preview" class="hidden" /> --}}
          <div id="start">
            <i class="fa fa-download" aria-hidden="true"></i>
            <div>Select a File </div>
            {{-- <div id="notimage" class="hidden">Please select an image</div> --}}
            <span id="file-upload-btn" class="btn btn-primary">Select a file</span>
            <button type="submit" class="btn btn-primary" style="background-color: #00a94e">Upload</button>
          </div>
        </label>
      </form>
    </div>
    {{-- <script src="{{asset('script.js')}}"></script> --}}
    
  </body>
</html>
