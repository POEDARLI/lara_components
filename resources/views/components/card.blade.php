<div class="card" style="width: 18rem;">
  <img src="https://images.unsplash.com/photo-1556967789-e6512208cf68?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1351&q=80" class="card-img-top" alt="...">

  <div class="card-body">
    <h5 class="card-title">{{ $card_title ??  "Card title"}}</h5>

    <p class="card-text"> {{$card_content }}</p>
    
    <!-- using component's default value by using $slot -->
    <a href="#" class="btn btn-primary">{{ $slot }}</a>
  </div>

</div>