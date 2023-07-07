<!DOCTYPE html>
<html lang="en">
@include('adminPanelHead')

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
            <a href="/createEntry">
              <span class="nav-new p-3 btnRegister" id="profile-tab" style="width: 18%;">
                Create Entry
              </span>
            </a>
            
            <a href="/" target="_blank">
              <span class="nav-new p-3 btnRegister me-5" id="profile-tab" style="width: 18%;">
                Home Page
              </span>
            </a>
            
            <h3 class="register-heading">Admil Panel</h3>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active">
            <div class="row register-form container-fluid">
              <table id="example1" style="height: 270px; margin-top: 5%;">
                <thead>
                  <tr style="text-align: center">
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Product ID</th>
                    <th>Rating</th>
                    <th>Avarage Rating</th>
                    <th>Feedback</th>
                    <th>Helpful Count</th>
                    <th>Unhelpful Count</th>
                    <th>Created</th>
                    <th>Alter Row</th>
                    <th>Drop Row</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $key => $rating)
                      <tr style="text-align: center">
                        <th>{{ $key + 1 }}</th>
                        <td>
                          {{ $rating->product->productName }}
                        </td>
                        <td>{{ $rating->product_id }}</td>
                        <td>{{ $rating->rating }}</td>
                        <td>
                          {{ $rating->product->average_rating ?
                          $rating->product->average_rating . ' / 5' : 'Not Rated Yet'}}
                        </td>
                        <td>{{ $rating->message }}</td>

                        @foreach ($rating->votes as $vote)
                          <td>
                            <span style="font-weight: {{ $vote->helpful != 0 ? 'normal' : 'bold' }}; font-style: {{ $vote->helpful != 0 ? 'normal' : 'italic' }}">
                              {{ $vote->helpful != 0 ? $vote->helpful : 'Not Voted Yet' }}
                            </span>
                          </td>

                          <td>
                            <span style="font-weight: {{ $vote->unhelpful != 0 ? 'normal' : 'bold' }}; font-style: {{ $vote->helpful != 0 ? 'normal' : 'italic' }}">
                              {{ $vote->unhelpful != 0 ? $vote->unhelpful : 'Not Voted Yet' }}
                            </span>
                          </td>
                        @endforeach

                        <td>{{$rating->created_at->diffForHumans()}}</td>
                        <td>
                          <a href="editRow/{{ $rating->ID }}">
                            <i class="bi bi-pencil text-warning fa-fw fa-2x" role="button"></i>
                          </a>
                        </td>
                        <td>
                          <a href="dropRow/{{ $rating->ID }}">
                            <i class="bi bi-x text-danger fa-fw fa-2x" role="button"></i>
                          </a>
                        </td>
                      </tr>
                  @endforeach
                </tbody>
                <tfoot>
                  <tr style="text-align: center">
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Product ID</th>
                    <th>Rating</th>
                    <th>Avarage Rating</th>
                    <th>Feedback</th>
                    <th>Helpful Count</th>
                    <th>Unhelpful Count</th>
                    <th>Created</th>
                    <th>Alter Row</th>
                    <th>Drop Row</th>
                  </tr>
                </tfoot>
              </table>
              <div class="box-footer">
                {{ $data->render('pagination::bootstrap-5') }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>

</html>