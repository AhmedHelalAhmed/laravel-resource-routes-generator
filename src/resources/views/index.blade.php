<!--
=========================================================
Ahmed Helal Ahmed - Ahmed.Helal.Online@gmail.com
=========================================================

Copyright 2020 Ahmed Helal Ahmed (https://www.linkedin.com/in/ahmedhelalahmed)
Developed by Ahmed Helal Ahmed

=========================================================
The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
@php use Illuminate\Support\Str; @endphp
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />

    <title>Laravel resource routes generator</title>
  </head>
  <body>
    <div class="container">
      @if($output)
      <div class="row">
        <div class="col-md-12">
          <h1>Requested resource routes</h1>
        </div>
        <div class="col-md-12">
          <textarea cols="100" rows="25">
          //==========================================================> start {{Str::plural($output['resource'])



            }} routes
          
          Route::get('/{{Str::plural($output['resource'])}}', '{{
              $output["namespace"]
            }}{{ ucfirst($output["resource"]) }}Controller@index')
          ->name('{{Str::plural($output['resource'])}}.index');
          
          Route::get('/{{Str::plural($output['resource'])}}/create', '{{
              $output["namespace"]
            }}{{ ucfirst($output["resource"]) }}Controller@create')
          ->name('{{Str::plural($output['resource'])}}.create');
          
          Route::post('/{{Str::plural($output['resource'])}}', '{{
              $output["namespace"]
            }}{{ ucfirst($output["resource"]) }}Controller@store')
          ->name('{{Str::plural($output['resource'])}}.store');
          
          Route::get('/{{Str::plural($output['resource'])}}/{{
              $output["modelBind"]
            }}', '{{ $output["namespace"]
            }}{{ ucfirst($output["resource"]) }}Controller@show')
          ->name('{{Str::plural($output['resource'])}}.show');
          
          Route::get('/{{Str::plural($output['resource'])}}/{{
              $output["modelBind"]
            }}/edit', '{{ $output["namespace"]
            }}{{ ucfirst($output["resource"]) }}Controller@edit')
          ->name('{{Str::plural($output['resource'])}}.edit');
          
          Route::put('/{{Str::plural($output['resource'])}}/{{
              $output["modelBind"]
            }}', '{{ $output["namespace"]
            }}{{ ucfirst($output["resource"]) }}Controller@update')
          ->name('{{Str::plural($output['resource'])}}.update');
          
          Route::delete('/{{Str::plural($output['resource'])}}/{{
              $output["modelBind"]
            }}', '{{ $output["namespace"]
            }}{{ ucfirst($output["resource"]) }}Controller@destroy')
          ->name('{{Str::plural($output['resource'])}}.destroy');
          
          //==========================================================> end {{Str::plural($output['resource'])



            }} routes
          </textarea>
        </div>
        <div class="col-md-12">
          <button class="btn btn-primary mt-1 mb-1">Copy routes</button>
        </div>
      </div>
      @endif

      <div class="row">
        <div class="col-md-12">
          <h1>Fill the form</h1>
          <form method="GET">
            <div class="form-group">
              <label for="resource_name">Resource Name</label>
              <input
                value="{{ request('resource_name') }}"
                type="resource_name"
                name="resource_name"
                class="form-control"
                id="resource_name"
                aria-describedby="emailResourceName"
                required
              />
              <small id="resource_name" class="form-text text-muted"
                >Required</small
              >
            </div>

            <div class="form-group">
              <label for="namespace">Name space</label>
              <input
                value="{{ request('namespace') }}"
                name="namespace"
                type="text"
                class="form-control"
                id="namespace"
                aria-describedby="emailnamespace"
                placeholder="Admin\"
              />
              <small id="namespace" class="form-text text-muted"
                >Example (Admin\) or leave it empty</small
              >
            </div>

            <div class="form-group">
              <label for="model_name">Model Bind</label>
              <input
                value="{{ request('model_name') }}"
                name="model_name"
                type="model_name"
                class="form-control"
                id="model_name"
                placeholder="Write name of the model or id"
                aria-describedby="emailModelName"
                required
              />
              <small id="model_name" class="form-text text-muted"
                >Required</small
              >
            </div>

            <button type="submit" class="btn btn-primary mt-1 mb-1">
              Submit
            </button>
          </form>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>
    <script>
      $("button").click(function () {
        $("textarea").select();
        document.execCommand("copy");
      });
    </script>
  </body>
</html>
