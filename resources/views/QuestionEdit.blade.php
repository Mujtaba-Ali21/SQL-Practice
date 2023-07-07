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

        .form-control {
        width: 400px;
        max-width: 100%;
        overflow-y: auto;
        padding: 15px 25px;
        -webkit-appearance: none;
        -moz-appearance: none;
        border: none;
        outline: none;
        border-radius: 12px;
        color: #444;
        font-size: 18px;
        box-shadow: -3px 3px 5px 0px rgba(0,0,0,0.10);
        }

        select{
        width: 400px;
        max-width: 100%;
        overflow-y: auto;
        cursor: pointer;
        padding: 15px 25px;
        -webkit-appearance: none;
        -moz-appearance: none;
        border: none;
        outline: none;
        border-radius: 12px;
        color: #444;
        font-size: 18px;
        box-shadow: -3px 3px 5px 0px rgba(0,0,0,0.10);
      }
      select option{
        padding: 10px 20px;
        margin-bottom: 8px;
        border-radius: 12px;
        background-color: rgb(238, 238, 238);
        white-space: pre-wrap;
        cursor: pointer;
      }
      select option:hover{
        background-color: rgb(223, 223, 223);
      }
      select option:checked{
        box-shadow: 0 0 10px 100px #595959 inset;
      }
      select::-webkit-scrollbar-track
      {
        background-color: #F5F5F5;
        border-radius: 12px;
      }

      select::-webkit-scrollbar
      {
        width: 8px;
        background-color: #F5F5F5;
      }

      select::-webkit-scrollbar-thumb
      {
        background-color: rgb(225, 225, 225);
        border-radius: 12px;
        background-image: -webkit-linear-gradient(90deg,
        rgba(160, 160, 160, 0.2) 25%,
        transparent 25%,
        transparent 50%,
        rgba(160, 160, 160, 0.2) 50%,
        rgba(160, 160, 160, 0.2) 75%,
        transparent 75%,
        transparent)
      }
      select.fadeIn {
        animation: fadeInDown 0.2s;
      }
      select.fadeOut{
        animation: fadeInUp 0.2s;
      }
      .select-background {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      z-index: 999;
      opacity: 0;
      visibility: hidden;
      transition: opacity 1s ease;
    }

    .select-box {
      position: relative;
      z-index: 1000;
    }

    .select-box.open .select-background {
      opacity: 1;
      visibility: visible;
    }
  </style>

<body>
    <div class="container register">
      <div class="row">
        <div class="col-md-10 register-right customShadow">
          <ul class="nav nav-tabs nav-justified">
            <li class="nav-item p-2">
              <span class="nav-new" id="profile-tab">
                Edit Question
              </span>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active">
              <h3 class="register-heading">Edit Question</h3>
              <div class="row register-form">
                @if($errors->any())
                <div class="alert mb-5 pt-2 px-5 text-dark shadow rounded mx-auto" style="background-color: #02C2FD; width: 25rem">
                  <ol>
                    @foreach ($errors->all() as $error)
                    <li class="h6" style="font-size: 1.4rem;">{{ $error }}</li>
                    @endforeach
                  </ol>
                </div>
                @endif

                <div class="col-md-12">
                  <form method="POST" action="{{ url('/question/edit/'.$data->ID) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <select name="product" size="1" style="color: gray; background-color: #E9ECEF; cursor: none;">
                        <optgroup label="Product Name">
                          <option value="{{ $data->product_id }}" selected>{{ $data->product->productName }}</option>
                        </optgroup>
                      </select>
      
                      <input class="form-control mt-2" type="text" name="question" placeholder="Question" value="{{ $data->question }}">

                    </div>
                    <input type="submit" class="btnRegister" value="Save Changes" />
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
