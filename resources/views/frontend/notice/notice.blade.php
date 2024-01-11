@extends('master')

@section('title', 'Notice page')

@section('body')

    <section  class="py-5">

        <div class="container mb-3">

                <h3 style="text-align:center;  width:20%; font-family: 'Times New Roman'; margin: auto; " class="mb-3"><span>All Notice</span></h3>

            <table class="w-100 mt-2" style="border-collapse: collapse; border: 1px solid #ddd;background-color: white" >
                <thead style="text-align: center; background-color:#B2BEB5;">
                <tr>
                    <th style="border: 1px solid #ddd;">Serial Number</th>
                    <th style="border: 1px solid #ddd;">Date</th>
                    <th style="border: 1px solid #ddd;">Title</th>
                    <th style="border: 1px solid #ddd;">Download (PDF)</th>
                </tr>
                </thead>
                <tbody style="text-align: center;">
{{--                //this is revers --}}
                @php
                    $reversedNotices = $notices->reverse();
                @endphp

                @foreach($reversedNotices as $key => $notice)
                    <tr style="background-color: whitesmoke">
                        <td style="border: 1px solid #ddd;">{{$loop->iteration}}</td>
                        <td style="border: 1px solid #ddd;">{{$notice->date}}</td>
                        <td style="border: 1px solid #ddd;" class="truncate-text" data-max-words="8">
                            @php
                                $words = explode(' ', $notice->title);
                                $truncatedText = implode(' ', array_slice($words, 0, 8));
                                echo count($words) > 8 ? $truncatedText . '...' : $truncatedText;
                            @endphp
                        </td>

                        <td style="border: 1px solid #ddd;">
                            @if($notice->pdf)
                                <a href="{{ asset($notice->pdf) }}" target="_blank" download>Download PDF</a>
                            @else
                                No PDF available
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>
    </section>
@endsection
