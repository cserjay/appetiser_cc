<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Appetiser CC by Serjay Soriano</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        <script src="http://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    </head>
    <body class="antialiased">

        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <a class="navbar-brand" href="#">&nbsp;</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
        </nav>

        <div class="container" style="margin-top: 80px;">
            <div class="card">
                <div class="card-header">
                  Calendar
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-5">
                                <div class="form-group">
                                    <label for="event_title">Event</label>
                                    <input type="text" class="form-control" id="event_title" value="{{ $posts->eventTitle }}">
                                </div>
                                <div class="row">
                                    <div class="col-6 form-group">
                                        <label for="date_from">From</label>
                                        <input type="date" min="2000-01-02" class="form-control" id="date_from" value="{{ $posts->from }}">
                                    </div>
                                    <div class="col-6 form-group">
                                        <label for="date_to">To</label>
                                        <input type="date" max="2019-11-30" class="form-control" id="date_to" value="{{ $posts->to }}">
                                    </div>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="mon">
                                    <label class="form-check-label" for="inlineCheckbox1">Mon</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="tue">
                                    <label class="form-check-label" for="inlineCheckbox2">Tue</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="wed">
                                    <label class="form-check-label" for="inlineCheckbox3">Wed</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="thu">
                                    <label class="form-check-label" for="inlineCheckbox4">Thu</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="fri">
                                    <label class="form-check-label" for="inlineCheckbox5">Fri</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="sat">
                                    <label class="form-check-label" for="inlineCheckbox6">Sat</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox7" value="sun">
                                    <label class="form-check-label" for="inlineCheckbox7">Sun</label>
                                </div>

                                <div class="col-12">
                                    <button onClick="submitData();" type="button" class="btn btn-primary mt-3">Save</button>
                                </div>
                            </div>
                            <div class="col-7">
                                <h2>November 2019</h2>

                                <ul class="list-group">
                                    @for ($i = 1; $i < 31; $i++)
                                        <li class="list-group-item">
                                            {{ $i }} 
                                            {{ date_format(new DateTime("2019-11-" . $i), "D") }} 
                                            @if ((int)date_format(new DateTime("2019-11-" . $i), "d") >= (int)date_format(new DateTime($posts->from), "d") &&
                                                (int)date_format(new DateTime("2019-11-" . $i), "d") <= (int)date_format(new DateTime($posts->to), "d"))
                                                <span class="ml-4">
                                                @switch(strtolower(date_format(new DateTime("2019-11-" . $i), "D")))
                                                    @case("mon")
                                                        @if ($posts->mon)
                                                        {{ $posts->eventTitle }}
                                                        @endif
                                                        @break

                                                    @case("tue")
                                                        @if ($posts->tue)
                                                        {{ $posts->eventTitle }}
                                                        @endif
                                                        @break

                                                    @case("wed")
                                                        @if ($posts->wed)
                                                        {{ $posts->eventTitle }}
                                                        @endif
                                                        @break

                                                    @case("thu")
                                                        @if ($posts->thu)
                                                        {{ $posts->eventTitle }}
                                                        @endif
                                                        @break

                                                    @case("fri")
                                                        @if ($posts->fri)
                                                        {{ $posts->eventTitle }}
                                                        @endif
                                                        @break

                                                    @case("sat")
                                                        @if ($posts->sat)
                                                        {{ $posts->eventTitle }}
                                                        @endif
                                                        @break

                                                    @case("sun")
                                                        @if ($posts->sun)
                                                        {{ $posts->eventTitle }}
                                                        @endif
                                                        @break

                                                    @default
                                                        {{ "" }}
                                                @endswitch
                                                </span>
                                            @endif
                                        </li>
                                    @endfor 

                                </ul>

                            </div>
                        </div>
                    </form>
                </div>
              </div>
        </div>

        <script>

            function check() {
                var mon = "{{ $posts->mon }}";
                var tue = "{{ $posts->tue }}";
                var wed = "{{ $posts->wed }}";
                var thu = "{{ $posts->thu }}";
                var fri = "{{ $posts->fri }}";
                var sat = "{{ $posts->sat }}";
                var sun = "{{ $posts->sun }}";

                $('#inlineCheckbox1').attr("checked", parseInt(mon) ? true : false);
                $('#inlineCheckbox2').attr("checked", parseInt(tue) ? true : false);
                $('#inlineCheckbox3').attr("checked", parseInt(wed) ? true : false);
                $('#inlineCheckbox4').attr("checked", parseInt(thu) ? true : false);
                $('#inlineCheckbox5').attr("checked", parseInt(fri) ? true : false);
                $('#inlineCheckbox6').attr("checked", parseInt(sat) ? true : false);
                $('#inlineCheckbox7').attr("checked", parseInt(sun) ? true : false);
            }

            window.onload = check
            
            function submitData() {
                const eventTitle = document.getElementById("event_title").value;
                const dateFrom = document.getElementById("date_from").value;
                const dateTo = document.getElementById("date_to").value;
                const mon = document.getElementById("inlineCheckbox1").checked ? 1 : 0;
                const tue = document.getElementById("inlineCheckbox2").checked ? 1 : 0;
                const wed = document.getElementById("inlineCheckbox3").checked ? 1 : 0;
                const thu = document.getElementById("inlineCheckbox4").checked ? 1 : 0;
                const fri = document.getElementById("inlineCheckbox5").checked ? 1 : 0;
                const sat = document.getElementById("inlineCheckbox6").checked ? 1 : 0;
                const sun = document.getElementById("inlineCheckbox7").checked ? 1 : 0;

                $.ajax({
                    method: "PUT",
                    url: "/api/updatesettings/1",
                    data: {
                        eventTitle: eventTitle,
                        from: dateFrom,
                        to: dateTo,
                        mon: mon,
                        tue: tue,
                        wed: wed,
                        thu: thu,
                        fri: fri,
                        sat: sat,
                        sun: sun
                    },
                    success: function(res) {
                        alert("Successfully Saved");
                        location.reload();
                    },
                    error: function(err) {
                        console.log(err)
                    }
                })
            }
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
