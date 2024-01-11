@extends('master')

@section('title')
    About  page
@endsection

@section('body')

    <section id="aboutSection" style="padding: 20px 0;  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        <div class="container mb-2 mt-5" onmouseover="addHoverEffect()" onmouseout="removeHoverEffect()">
            @foreach($abouts as $about)
                <h1 id="hoveredTitle" style="text-align: center; font-family: 'Times New Roman'; color: #007bff; font-size: 2.5rem;" class="mb-2">{{$about->title}}</h1>
                <div class="text-center mb-4">
                    <hr id="hoveredHr" style="border: 2px solid #007bff; width: 100px; margin: 0 auto;">
                </div>
                <p id="hoveredText" style="text-align: justify; font-size: 1.1rem; color: #555;">{{$about->description}}</p>
            @endforeach
        </div>
    </section>

    <script>
        function addHoverEffect() {
            document.getElementById('aboutSection').style.backgroundColor = '#d4e3ff';
            document.getElementById('hoveredHr').style.borderColor = '#0056b3';
            document.getElementById('hoveredTitle').style.color = '#0056b3';
            document.getElementById('hoveredText').style.color = '#333';
        }

        function removeHoverEffect() {
            document.getElementById('aboutSection').style.backgroundColor = '#f8f9fa';
            document.getElementById('hoveredHr').style.borderColor = '#007bff';
            document.getElementById('hoveredTitle').style.color = '#007bff';
            document.getElementById('hoveredText').style.color = '#555';
        }
    </script>




@endsection
