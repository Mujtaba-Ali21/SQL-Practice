<!DOCTYPE html>
<html lang="en">
@include('adminPanelHead')

<style>
  .chat-list {
    padding: 0;
    font-size: .8rem;
  }

  .chat-list li {
    margin-bottom: 40px;
    overflow: auto;
    color: #ffffff;
  }

  .chat-list .chat-img {
    float: left;
    width: 48px;
  }

  .chat-list .chat-img img {
    -webkit-border-radius: 50px;
    -moz-border-radius: 50px;
    border-radius: 50px;
    width: 100%;
  }

  .chat-list .chat-message {
    -webkit-border-radius: 50px;
    -moz-border-radius: 50px;
    border-radius: 50px;
    background: #a6c76c;
    display: inline-block;
    padding: 10px 30px;
    position: relative;
  }

  .chat-list .chat-message:before {
    content: "";
    position: absolute;
    top: 15px;
    width: 0;
    height: 0;
  }

  .chat-list .chat-message h6 {
    margin: 0 0 5px 0;
    font-weight: 600;
    line-height: 100%;
    font-size: .9rem;
  }

  .chat-list .chat-message p {
    line-height: 18px;
    margin: 0;
    padding: 0;
  }

  .chat-list .chat-body {
    margin-left: 20px;
    float: left;
    width: 70%;
  }

  .chat-list .in .chat-message:before {
    left: -12px;
    border-bottom: 20px solid transparent;
    border-right: 20px solid #A6C76C;
  }

  .chat-list .out .chat-img {
    float: right;
  }

  .chat-list .out .chat-body {
    float: right;
    margin-right: 20px;
    text-align: right;
  }

  .chat-list .out .chat-message {
    background: #cc9966;
  }

  .chat-list .out .chat-message:before {
    right: -12px;
    border-bottom: 20px solid transparent;
    border-left: 20px solid #cc9966;
  }

  .card .card-header:first-child {
    -webkit-border-radius: 0.3rem 0.3rem 0 0;
    -moz-border-radius: 0.3rem 0.3rem 0 0;
    border-radius: 0.3rem 0.3rem 0 0;
  }

  .card .card-header {
    background: #17202b;
    border: 0;
    font-size: 1rem;
    padding: .65rem 1rem;
    position: relative;
    font-weight: 600;
    color: #ffffff;
  }

  .content {
    margin-top: 40px;
  }
</style>

<body>

  @if ($message = Session::get('success'))
  <form>
    <div class="alert alert-custom alert-success alert-block text-dark alert-dismissible">
      <strong>{{ $message }}</strong>
      <button type="submit" class="btn-close"></button>
    </div>
  </form>
  @endif

  <div class="register-right customShadow">
    <ul class="nav p-5 nav-justified ">
      <li class="nav-item">
        <a href="/askQuestion">
          <span class="nav-new p-3 btnRegister" id="profile-tab" style="width: 18%;">
            Create Entry
          </span>
        </a>

        <a href="/" target="_blank">
          <span class="nav-new p-3 btnRegister me-5" id="profile-tab" style="width: 18%;">
            Home Page
          </span>
        </a>

        <h3 class="register-heading">Questions and Answers</h3>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active">
        <div class="row register-form container-fluid ms-5">
          <div class="container content" style="margin-left: 100px;">
            <div class="row mt-5">
              <div class="col-xl-11 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="review">
                  <ul class="chat-list">
                    @foreach ($questions->sortByDesc('created_at') as $question)
                    <span class="d-flex p-1 me-2"
                        style="width: 11%;
                            height: 20%;
                            border: 2px solid #EEEEEE;
                            border-radius: 30px;
                            border-bottom-right-radius: 0px;
                            position: relative;
                            right: 120px;
                            top: 5px;">

                      <img src="/productImages/{{ $question->product->image }}"
                        alt="{{ $question->product->name }}"
                        height="45px"
                        width="45px"
                        style="border-radius: 35px">

                      <div>
                        @if (strlen($question->product->productName) > 11)
                          <i>{{ substr($question->product->productName, 0, 11) }}...</i>
                        @else
                          <i>{{ $question->product->productName }}</i>
                        @endif

                        <div class="d-flex justify-content-start align-items-center">
                          <i>${{ $question->product->price }}.00</i>
                        </div>  
                        
                        <div class="d-flex justify-content-start align-self-end">
                        @for ($i = 1; $i <= 5; $i++)
                            @if ($i <= $question->product->average_rating)
                            <i class="bi bi-star-fill" style="color: #fcb941;"></i>
                            @else
                                <i class="bi bi-star-fill" style="color: #cccccc;"></i>
                            @endif
                        @endfor
                      </div>
                    </div>
                    
                    </span>
                    <li class="in">
                      <div class="chat-img">
                        <img alt="Avtar"
                          src="data:image/png;base64,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" />
                      </div>
                      <span class="text-dark pt-5 fs-4">
                        <a href="/productDetails/answer/{{$question->ID}}" class="openAnsModal" role="button">
                          Reply |
                        </a>

                        <a href="/question/edit/{{$question->ID}}" class="openAnsModal" role="button">
                          Edit |
                        </a>

                        <a href="/question/delete/{{$question->ID}}" class="openAnsModal" role="button">
                          Delete
                        </a>
                      </span>

                      <div class="chat-body d-flex">
                        <div class="chat-message">
                          <h6 style="color: #777;">Username</h6>
                          <p class="text-white">{{$question->question}}</p>
                          <h6 style="color: #777; margin: 5px 10px 0 0">{{ $question->created_at->diffForHumans() }}
                          </h6>
                        </div>
                      </div>
                    </li>

                    @foreach ($answers->where('question_id', $question->ID)->sortBy('created_at') as $answer)
                    <li class="out">
                      <div class="chat-img">
                        <img alt="Avtar"
                          src="data:image/jpeg;base64,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" />
                      </div>
                      <span class="text-dark pt-5 fs-4">
                        <a href="/answer/edit/{{$answer->ID}}" class="openAnsModal" role="button"
                          style="margin-left: 100px;">
                          Edit |
                        </a>

                        <a href="/answer/delete/{{$answer->ID}}" class="openAnsModal" role="button">
                          Delete
                        </a>

                        <div class="chat-body">
                          <div class="chat-message">
                            <h6 style="color: #777;">Seller</h6>
                            <p class="text-white">{{ $answer->answer }}</p>
                            <h6 style="color: #777; margin: 5px 0 0 0">{{ $answer->created_at->diffForHumans() }}</h6>
                          </div>
                        </div>
                    </li>
                    @endforeach
                    @endforeach
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
</body>

</html>