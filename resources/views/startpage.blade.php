<!DOCTYPE html>
<html lang="en">
    <head>
        <title>WIKICULTURE</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="/css/start.css" rel="stylesheet">
        <style>

        </style>
    </head>
    <body>

        <main>
            <div class="title">
                <h2>Wikicultur</h2>
                <p>The Free Encyclopedia</p>
            </div>
            <div class="regions">
                <div class="left">
                    <div class="single" style="transform: translateX(100%);">
                        <h4>L'extreme Nord</h4>
                    </div>
                    <div class="single" style="transform: translateX(10%);">
                        <h4>Le Nord</h4>
                    </div>
                    <div class="single" style="transform: translateX(5%);">
                        <h4>Adamawa</h4>
                    </div>
                    <div class="single" style="transform: translateX(10%);">
                        <h4>L'est</h4>
                    </div>
                    <div class="single" style="transform: translateX(100%);">
                        <h4>L'ouest</h4>
                    </div>

                </div>
                <div class="middle">
                    <img src="images/R.jpeg" width="450px" height="450px" alt="">
                </div>
                <div class="right">
                    <div class="single" style="transform: translateX(-100%);">
                        <h4>Centre</h4>
                    </div>
                    <div class="single" style="transform: translateX(-10%);">
                        <h4>Nord-Ouest</h4>
                    </div>
                    <div class="single" style="transform: translateX(-5%);">
                        <h4>Sud-Ouest</h4>
                    </div>
                    <div class="single" style="transform: translateX(-10%);">
                        <h4>Littoral</h4>
                    </div>
                    <div class="single" style="transform: translateX(-100%);">
                        <h4>Sud</h4>
                    </div>
                </div>
            </div>
            <div class="search">
                <form>
                    <input type="text" name="search" class="typeahead">
                </form>

                <span>
                    
                    <a href="{{ url('/home') }}"><img src="../images/icons8-search-32.png" width="50px" height="50px" id="icon" alt="" ></a>
                </span>
            </div>
            <div class="your-cult-wiki-container">
                <div class="line"></div>
                <div class="your-cult-wiki">
                    <span>
                        <i class="fa-solid fa-language"></i>
                    </span>
                    <span>
                        Use Wikiculture in your language
                    </span>
                    <span>
                        <i class="fa-solid fa-angle-down"></i>
                    </span>
                </div>
                <div class="line"></div>
            </div><br><br>

        </main>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js" integrity="sha512-HWlJyU4ut5HkEj0QsK/IxBCY55n5ZpskyjVlAoV9Z7XQwwkqXoYdCIC93/htL3Gu5H3R4an/S0h2NXfbZk3g7w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            url = "{{route('get-result')}}";
            $('input.typeahead').typeahead({
                source: function(query, process){
                    return $.get(url, {term:query}, function(data){
                        return process(data);
                    });
                }
            });
        </script>
    </body>

</html>
