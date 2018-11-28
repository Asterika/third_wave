@extends('layout')

@section('content')

  <h1 class="title-small">Third Wave Brewing Methods</h1><br >

  <!-- <div class='container' align='center'> -->

  <div class="main">
    <div class="form-container">
      <img src="/images/brewing_coffee.jpg" class="sidebar" alt="Brewing Coffee | Photo by Najib Khalil on Unsplash">

      <div class="form-box"><br >
        <img src="/images/v60-pour-over.jpg" style="height:40px; width:40px; align:center; border:1px solid gray;">&emsp;&emsp;&emsp;
        <img src="/images/kalita.jpg" style="height:40px; width:40px; align:center; border:1px solid gray;">&emsp;&emsp;&emsp;
        <img src="/images/chemex.jpg" style="height:40px; width:40px; align:center; border:1px solid gray;"><br ><br >

        <strong>v60 Pour Over:</strong> Ceramic or glass triangular piece with single hole in bottom, considerable control over brewing
          <ul>
            <li>Timing: 3+ minutes | Quantity: 10-12 ounces</li>
            <li>Quality: Clean coffee that highlights true notes of bean</li>
          </ul><br >

        <strong>Kalita Pour Over:</strong> Similar to v60 but has a flat bottom with 3 small holes, allowing for even extraction
          <ul>
            <li>Quantity: 12-15 ounces</li>
            <li>Quality: A slightly fuller body than v60</li>
          </ul><br >

        <strong>Chemex:</strong> Essentially a larger version of a v60
          <ul>
            <li>Quantity: 24+ ounces</li>
            <li>Quality: Results in a clean cup of coffee</li>
          </ul><br >

        <img src="/images/aero-press.jpg" style="height:40px; width:40px; align:center; border:1px solid gray;">&emsp;&emsp;&emsp;
        <img src="/images/french-press.jpg" style="height:40px; width:40px; align:center; border:1px solid gray;"><br ><br >

        <strong>AeroPress:</strong> Portable filter brewing method that uses similar principles of espresso machine (heat and water pressure) on a smaller scale
          <ul>
            <li>Timing: 2 minutes or less | Quantity: 8 ounces</li>
            <li>Quality: Full-bodied, fast, and flavorful cup</li>
          </ul><br >

        <strong>French Press:</strong> Heavy bodied, wire filter
          <ul>
            <li>Timing: ~4 minutes
            <li>Quantity: Multiple cups with minimal effort (24+ ounces)</li>
            <li>Quality: </li>
          </ul><br >
      </div>
    </div>
  </div>

@endsection
