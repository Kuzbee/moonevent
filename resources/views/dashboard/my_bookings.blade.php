<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{asset('output.css')}}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
</head>
<body class="font-poppins text-black">
    <section id="content" class="max-w-[640px] w-full mx-auto bg-[#F9F2EF] min-h-screen flex flex-col gap-8 pb-[120px]">
        <nav class="mt-8 px-4 w-full flex items-center justify-between">
          <a href="{{route('front.index')}}">
            <img src="{{asset('assets/icons/back.png')}}" alt="back">
          </a>
          <p class="text-center m-auto font-semibold">Schedule</p>
          <div class="w-12"></div>
        </nav>
        <div class="flex flex-col gap-3 px-4">
          <p class="font-semibold">My Packages</p>

          @forelse(Auth::user()->bookings as $booking)
          <a href="{{route('dashboard.bookings.details', $booking->id)}}" class="card">
            <div class="bg-white p-4 rounded-[26px] flex items-center gap-4">
              <p class="text-center text-sm leading-[22px] tracking-035">
                <span class="font-semibold text-2xl">{{date('M d,Y', strtotime($booking->start_date))}}</span> </p>
              <div class="flex items-center gap-4">
                <div class="w-[92px] h-[92px] flex shrink-0 rounded-xl overflow-hidden">
                  <img src="{{Storage::url($booking->tour->thumbnail)}}" class="w-full h-full object-cover object-center" alt="thumbnail">
                </div>
                <div class="flex flex-col gap-1">
                  <p class="font-semibold text-sm tracking-035 leading-[22px]">
                        {{$booking->tour->name}}
                  </p>
                  <p class="text-sm leading-[22px] tracking-035 text-darkGrey">
                    </p>
                    @if($booking->status=='success')
                  <div class="success-badge w-fit border border-[#60A5FA] p-[4px_8px] rounded-lg bg-[#EFF6FF] flex items-center justify-center">
                    <span class="text-xs leading-[22px] tracking-035 text-[#2563EB]">Success</span>
                  </div>
                  @elseif($booking->status=='declined')
                  <div class="success-badge w-fit border border-[#60A5FA] p-[4px_8px] rounded-lg bg-[#EFF6FF] flex items-center justify-center">
                    <span class="text-xs leading-[22px] tracking-035 text-[#2563EB]">Declined</span>
                  </div>
                  @else
                  <div class="success-badge w-fit border border-[#60A5FA] p-[4px_8px] rounded-lg bg-[#EFF6FF] flex items-center justify-center">
                  <span class="text-xs leading-[22px] tracking-035 text-[#2563EB]">Pending</span>
                 </div>
                @endif
                </div>
              </div>
            </div>
          </a>
          @empty
          <p>Anda belum pernah melakukan booking</p>
          @endforelse

        </div>
    </section>
</body>
</html>