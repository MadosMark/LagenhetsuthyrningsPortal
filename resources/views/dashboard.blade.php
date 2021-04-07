@include('/header')

<body>

    <div class="container_cards">
        {{-- <div class="row align-items-start"> --}}
        <div class="col">
              <img class="image" src="https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80" alt="">
            <div class="box_text">
                <h3> Polkagatan 14D</h3>
                  <p>Läs mer om lägenheten här:</p>
                  <button onclick="window.location='{{ url('apply') }}'" type="button" class="btn btn-primary">Ansök</button>
            </div>
        </div>





            <div class="col">

          </div>
        <div class="col">

        </div>
        <div class="col">

              </div>
              <div class="col">

              </div>
            <div class="col">

            </div>
            <div class="col">

              </div>
              <div class="col">

              </div>
            <div class="col">

            </div>
            <div class="col">

              </div>
              <div class="col">

              </div>
            <div class="col">

            </div>
    </div>


        {{-- <form action="tasks" method="post">
            @csrf
            <label for="description">Task</label>
            <input name="description" id="description" type="text" />
            <button type="submit">Create Task</button>
        </form>

        <ul>
            @foreach($user->tasks as $task)
            <li>
                @if ($task->completed)
                <s>{{ $task->description }} </s>
                @else
                <form action="tasks/{{ $task->id }}/complete" method="post">
                    @csrf
                    @method('patch')
                    {{ $task->description }}
                    <button type="submit">Complete</button>
                </form>
                @endif
            </li>
            @endforeach
        </ul> --}}
    </body>
    <script src="{{mix('js/app.js')}}"></script>
</html>
