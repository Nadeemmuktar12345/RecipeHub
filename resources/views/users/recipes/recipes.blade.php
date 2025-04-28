@extends('master')

@section('content')
  <section class="ingredients-form" style="background-image: url('path/to/your/image.jpg'); background-size: cover; background-position: center;">
    <div class="overlay">
      <h2>Add Ingredients</h2>
      <form id="ingredientsForm">
        <div class="form-group">
          <label for="ingredients">Ingredients:</label>
          <textarea id="ingredients" placeholder="Enter ingredients (separate by commas)" required></textarea>
        </div>
        <button type="submit">Add Ingredients</button>
      </form>
    </div>
  </section>

  <!-- Display Ingredients -->
  <section class="ingredients-list">
    <h2>Your Ingredients</h2>
    <div id="ingredientsContainer"></div>
  </section>
@endsection