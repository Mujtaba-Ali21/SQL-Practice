<!DOCTYPE html>
<html lang="en">
  @include('head')

  <style>
        body{
            background: -webkit-linear-gradient(left, #3931af, #00c6ff);
            margin-top: 3%;
            padding: 3%;
        }
        .register-right{
            background: #f8f9fa;
            border-top-left-radius: 10% 50%;
            border-bottom-left-radius: 10% 50%;
            margin-left: 100px;
        }
        @-webkit-keyframes mover {
            0% { transform: translateY(0); }
            100% { transform: translateY(-20px); }
        }
        @keyframes mover {
            0% { transform: translateY(0); }
            100% { transform: translateY(-20px); }
        }
        .register .register-form{
            padding: 10%;
            margin-top: 10%;
        }
        .btnRegister{
            float: right;
            margin-top: 10%;
            border: none;
            border-radius: 1.5rem;
            padding: 2%;
            background: #0062cc;
            transition: 0.5s ease-in-out;
            color: #fff;
            font-weight: 600;
            width: 50%;
            cursor: pointer;
        }
        .btnRegister:hover{
            background: #01C3FD;
            box-shadow: 1px 15px 18px -2px rgba(0,0,0,0.55);
            -webkit-box-shadow: 1px 15px 18px -2px rgba(0,0,0,0.55);
            -moz-box-shadow: 1px 15px 18px -2px rgba(0,0,0,0.55);
            transition: 0.5s ease-in-out;
        }
        .register .nav-tabs{
            margin-top: 3%;
            border: none;
            background: #0062cc;
            border-radius: 1.5rem;
            width: 28%;
            float: right;
        }
        .register .nav-tabs .nav-new{
            padding: 5%;
            height: 50px;
            font-weight: 600;
            color: #fff;
            border-top-right-radius: 1.5rem;
            border-bottom-right-radius: 1.5rem;
        }
        .register-heading{
            text-align: center;
            margin-top: 8%;
            margin-bottom: -15%;
            color: #495057;
        }

        .customShadow{
          box-shadow: -17px -5px 22px 0px rgba(0,0,0,0.46);
          -webkit-box-shadow: -17px -5px 22px 0px rgba(0,0,0,0.46);
          -moz-box-shadow: -17px -5px 22px 0px rgba(0,0,0,0.46);
        }

        .form-control:focus {
          border: none;
          box-shadow: -1px -2px 16px 0px rgba(0,0,0,0.34);
          -webkit-box-shadow: -1px -2px 16px 0px rgba(0,0,0,0.34);
          -moz-box-shadow: -1px -2px 16px 0px rgba(0,0,0,0.34);
        }

        .disabled {
          border-radius: 100px 100px 0 0;
        }

  </style>

<body>
  <div class="container register">
    <div class="row">
      <div class="col-md-10 register-right customShadow">
        <ul class="nav nav-tabs nav-justified">
          <li class="nav-item p-2">
            <span class="nav-new" id="profile-tab">
                Answer
            </span>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div
          class="tab-pane fade show active"
          >
          <h3 class="register-heading">Answer</h3>
          <div class="row register-form">
                
              @if($errors->any())
                <div class="alert mb-5 pt-2 px-5 text-dark shadow rounded mx-auto" style="background-color: #02C2FD; width: 25rem">
                  <ol>
                      @foreach ($errors->all() as $errors)
                          <li class="h6" style="font-size: 1.4rem;">{{ $errors }}</li>
                      @endforeach
                  </ol>
                </div>
              @endif

                <div class="col-md-12">
                  <form method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <input
                        type="text"
                        class="form-control disabled"
                        value="{{$question->question}}"
                        disabled
                      />
                      <input
                        type="text"
                        class="form-control"
                        name="answer"
                        placeholder="Enter Your Answer Here"
                      />
                    </div>
                    <input type="submit" class="btnRegister" value="Submit" />
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
