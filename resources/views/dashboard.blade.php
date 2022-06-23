@extends('layouts.user.app')
@section('content')
@include('layouts.user.sidebar')
@include('layouts.user.navbar')
@if(isset($error))
<div class="alert alert-danger">
    {{ $error }}
</div>
@endif
<section
    class="dashboard-section bg-gradient-to-tl from-green-400 via-black to-rose-500 py-8 h-screen flex items-center">
    <div class="container mx-auto pt-4 pb-12 bg-zinc-900 rounded-lg">
        <div class="flex flex-no-wrap items-start">
            <div class="w-full ">
                <div class="py-4 px-2">
                    <div
                        class="px-7 header flex text-white lg:justify-around md:justify-around justify-start py-[30px] border-b-[2px] border-slate-100 flex-wrap gap-x-4 ">
                        <a class="cursor-pointer" id="acc">
                            <div class="flex items-center instance group">
                                <div class="svg-container"> <svg class="text-white group-hover:text-emerald-500"
                                        width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.24626 6.51211C8.73332 6.46145 8.21726 6.57057 7.76874 6.82454C7.32022 7.07851 6.96116 7.4649 6.74072 7.93082C6.52028 8.39673 6.44924 8.91939 6.53733 9.42724C6.62541 9.9351 6.86832 10.4033 7.23278 10.7678C7.59725 11.1322 8.06546 11.3751 8.57331 11.4632C9.08116 11.5513 9.60382 11.4803 10.0697 11.2598C10.5357 11.0394 10.922 10.6803 11.176 10.2318C11.43 9.78329 11.5391 9.26723 11.4884 8.7543C11.4307 8.17929 11.1759 7.64193 10.7673 7.23329C10.3586 6.82465 9.82127 6.56986 9.24626 6.51211V6.51211ZM15.2658 9C15.2642 9.27174 15.2442 9.54306 15.206 9.81211L16.972 11.1973C17.0489 11.261 17.1008 11.35 17.1183 11.4483C17.1358 11.5466 17.1179 11.648 17.0677 11.7344L15.397 14.625C15.3463 14.7106 15.267 14.7754 15.1731 14.8082C15.0792 14.841 14.9767 14.8396 14.8838 14.8043L13.1299 14.098C13.0331 14.0595 12.9284 14.0456 12.825 14.0576C12.7215 14.0695 12.6227 14.1069 12.5373 14.1664C12.2696 14.3507 11.9883 14.5145 11.6959 14.6562C11.6039 14.7009 11.5244 14.7676 11.4643 14.8503C11.4042 14.933 11.3654 15.0292 11.3513 15.1305L11.0884 17.0012C11.0712 17.1 11.0201 17.1897 10.944 17.255C10.868 17.3204 10.7715 17.3573 10.6713 17.3594H7.32985C7.23124 17.3577 7.13614 17.3224 7.06024 17.2594C6.98433 17.1965 6.93215 17.1095 6.91227 17.0129L6.64978 15.1449C6.63503 15.0426 6.59523 14.9454 6.53389 14.8621C6.47256 14.7789 6.3916 14.712 6.29821 14.6676C6.00611 14.5266 5.72578 14.3624 5.45993 14.1766C5.37481 14.1173 5.27629 14.0802 5.17326 14.0686C5.07022 14.0569 4.9659 14.0711 4.8697 14.1098L3.11618 14.8156C3.02325 14.851 2.92082 14.8525 2.82693 14.8197C2.73303 14.787 2.6537 14.7222 2.6029 14.6367L0.932196 11.7461C0.881967 11.6597 0.864017 11.5583 0.881543 11.46C0.899068 11.3616 0.950932 11.2727 1.0279 11.209L2.52048 10.0371C2.60225 9.9722 2.66652 9.88789 2.70745 9.79185C2.74837 9.6958 2.76467 9.59105 2.75485 9.48711C2.74079 9.32422 2.7322 9.16172 2.7322 8.99883C2.7322 8.83594 2.7404 8.67578 2.75485 8.51641C2.7636 8.4131 2.7465 8.30924 2.70511 8.21418C2.66372 8.11912 2.59933 8.03585 2.51774 7.97187L1.02595 6.8C0.950228 6.73597 0.899457 6.64734 0.88253 6.54964C0.865603 6.45194 0.8836 6.35139 0.933368 6.26562L2.60407 3.375C2.65481 3.28945 2.73412 3.22455 2.82802 3.19175C2.92192 3.15895 3.02438 3.16035 3.11735 3.1957L4.87126 3.90195C4.96798 3.94046 5.07274 3.95438 5.17616 3.94245C5.27958 3.93052 5.37843 3.89311 5.46384 3.83359C5.73151 3.64927 6.01279 3.48552 6.30524 3.34375C6.39719 3.29906 6.47671 3.23242 6.5368 3.14972C6.59689 3.06701 6.63569 2.97078 6.64978 2.86953L6.91267 0.998828C6.92993 0.900032 6.98097 0.810299 7.05707 0.744964C7.13316 0.679629 7.22958 0.642748 7.32985 0.640625H10.6713C10.7699 0.642331 10.865 0.677578 10.9409 0.74056C11.0168 0.803542 11.069 0.8905 11.0888 0.987109L11.3513 2.85508C11.3661 2.95745 11.4059 3.05459 11.4672 3.13787C11.5286 3.22114 11.6095 3.28798 11.7029 3.33242C11.995 3.47342 12.2753 3.63762 12.5412 3.82344C12.6263 3.88266 12.7248 3.91978 12.8279 3.93144C12.9309 3.9431 13.0352 3.92894 13.1314 3.89023L14.8849 3.18438C14.9779 3.14899 15.0803 3.14753 15.1742 3.18026C15.2681 3.21299 15.3474 3.2778 15.3982 3.36328L17.0689 6.25391C17.1191 6.34027 17.1371 6.44165 17.1196 6.54001C17.102 6.63837 17.0502 6.72732 16.9732 6.79102L15.4806 7.96289C15.3985 8.02759 15.3339 8.1118 15.2926 8.20786C15.2513 8.30392 15.2347 8.40878 15.2443 8.51289C15.2572 8.67461 15.2658 8.83711 15.2658 9Z"
                                            stroke="Currentcolor" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg> </div>

                                <div class="pl-3 heading-container">
                                    <p
                                        class="text-base font-medium leading-none text-white group-hover:text-emerald-500">
                                        General </p>
                                </div>
                            </div>
                        </a> <a class="cursor-pointer">
                            <div class="flex items-center instance group">
                                <div class="svg-container"> <svg class="text-white group-hover:text-emerald-500"
                                        width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.5 17.5V9.375" stroke="Currentcolor" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M2.5 9.375V17.5" stroke="Currentcolor" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M14.9401 1.875H5.05964C4.20847 1.875 3.43972 2.34375 3.10925 3.06484L1.41785 6.75781C0.848315 8.00039 1.79402 9.4082 3.26121 9.45312C3.28725 9.45312 3.31329 9.45312 3.33933 9.45312C4.56589 9.45312 5.56003 8.46953 5.56003 7.41289C5.56003 8.46758 6.55456 9.45312 7.78113 9.45312C9.00769 9.45312 9.99988 8.53984 9.99988 7.41289C9.99988 8.46758 10.994 9.45312 12.2206 9.45312C13.4471 9.45312 14.4417 8.53984 14.4417 7.41289C14.4417 8.53984 15.4358 9.45312 16.6624 9.45312C16.6884 9.45312 16.7138 9.45312 16.7385 9.45312C18.2057 9.40742 19.1514 7.99961 18.5819 6.75781L16.8905 3.06484C16.56 2.34375 15.7913 1.875 14.9401 1.875Z"
                                            stroke="Currentcolor" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M1.25 18.125H18.75" stroke="Currentcolor" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M5.3125 11.25H8.4375C8.68614 11.25 8.9246 11.3488 9.10041 11.5246C9.27623 11.7004 9.375 11.9389 9.375 12.1875V15.625H4.375V12.1875C4.375 11.9389 4.47377 11.7004 4.64959 11.5246C4.8254 11.3488 5.06386 11.25 5.3125 11.25Z"
                                            stroke="Currentcolor" stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M11.25 18.125V12.1875C11.25 11.9389 11.3488 11.7004 11.5246 11.5246C11.7004 11.3488 11.9389 11.25 12.1875 11.25H14.6875C14.9361 11.25 15.1746 11.3488 15.3504 11.5246C15.5262 11.7004 15.625 11.9389 15.625 12.1875V18.125"
                                            stroke="Currentcolor" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg> </div>

                                <div class="pl-3 heading-container">
                                    <p
                                        class="text-base font-medium leading-none text-white group-hover:text-emerald-500">
                                        Store</p>
                                </div>
                            </div>
                        </a> <a class="cursor-pointer" id="prod" href="#">

                            <div class="flex items-center group ">
                                <div class="svg-container"> <svg class="text-white group-hover:text-emerald-500"
                                        width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3.125 6.875C2.95924 6.875 2.80027 6.94085 2.68306 7.05806C2.56585 7.17527 2.5 7.33424 2.5 7.5V15.9375C2.5 17.1187 3.50625 18.125 4.6875 18.125H15.3125C16.4937 18.125 17.5 17.1676 17.5 15.9863V7.5C17.5 7.33424 17.4342 7.17527 17.3169 7.05806C17.1997 6.94085 17.0408 6.875 16.875 6.875H3.125Z"
                                            stroke="Currentcolor" stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M6.25 6.875V5.625C6.25 4.63044 6.64509 3.67661 7.34835 2.97335C8.05161 2.27009 9.00544 1.875 10 1.875V1.875C10.9946 1.875 11.9484 2.27009 12.6517 2.97335C13.3549 3.67661 13.75 4.63044 13.75 5.625V6.875"
                                            stroke="Currentcolor" stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M6.25 8.75V9.375C6.25 10.3696 6.64509 11.3234 7.34835 12.0267C8.05161 12.7299 9.00544 13.125 10 13.125C10.9946 13.125 11.9484 12.7299 12.6517 12.0267C13.3549 11.3234 13.75 10.3696 13.75 9.375V8.75"
                                            stroke="Currentcolor" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg> </div>
                                <div class="pl-3 heading-container">
                                    <p
                                        class="text-base font-medium leading-none text-white group-hover:text-emerald-500">
                                        Product </p>
                                </div>
                            </div>
                        </a> <a class="cursor-pointer">

                            <div class="flex items-center group">
                                <div class="svg-container"> <svg class="text-white group-hover:text-emerald-500"
                                        width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2.07556 7.81027L17.7006 1.8966C17.7569 1.87504 17.8183 1.87026 17.8774 1.88284C17.9364 1.89543 17.9905 1.92483 18.0332 1.96751C18.0758 2.01018 18.1052 2.0643 18.1178 2.12332C18.1304 2.18234 18.1256 2.24375 18.1041 2.30011L12.1904 17.9251C12.1669 17.9845 12.1258 18.0352 12.0726 18.0704C12.0194 18.1057 11.9566 18.1238 11.8928 18.1224C11.829 18.1209 11.7672 18.1 11.7156 18.0623C11.6641 18.0247 11.6253 17.9722 11.6045 17.9118L8.97165 11.4239C8.94096 11.332 8.8893 11.2485 8.82076 11.1799C8.75222 11.1114 8.66868 11.0597 8.57673 11.029L2.08884 8.39855C2.02772 8.37821 1.97438 8.33949 1.93612 8.28767C1.89785 8.23586 1.87653 8.17348 1.87508 8.10909C1.87363 8.04469 1.89211 7.98142 1.92799 7.92793C1.96388 7.87444 2.01542 7.83334 2.07556 7.81027V7.81027Z"
                                            stroke="Currentcolor" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M17.9688 2.03125L8.86719 11.1328" stroke="Currentcolor"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg> </div>
                                <div class="pl-3 heading-container">
                                    <p
                                        class="text-base font-medium leading-none text-white group-hover:text-emerald-500">
                                        Location </p>
                                </div>
                            </div>
                        </a> <a class="cursor-pointer">

                            <div class="flex items-center group">
                                <div class="svg-container"> <svg class="text-white group-hover:text-emerald-500"
                                        width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.7035 6.5625C15.5891 8.15117 14.4106 9.375 13.1254 9.375C11.8403 9.375 10.6598 8.15156 10.5473 6.5625C10.4301 4.90977 11.5774 3.75 13.1254 3.75C14.6735 3.75 15.8207 4.93984 15.7035 6.5625Z"
                                            stroke="Currentcolor" stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M13.1248 11.875C10.5791 11.875 8.1311 13.1395 7.51781 15.602C7.43656 15.9277 7.64086 16.25 7.97563 16.25H18.2745C18.6092 16.25 18.8123 15.9277 18.7323 15.602C18.119 13.1 15.6709 11.875 13.1248 11.875Z"
                                            stroke="Currentcolor" stroke-miterlimit="10" />
                                        <path
                                            d="M7.81116 7.26328C7.71975 8.53203 6.76741 9.53125 5.74085 9.53125C4.71429 9.53125 3.76038 8.53242 3.67054 7.26328C3.57718 5.94336 4.50413 5 5.74085 5C6.97757 5 7.90452 5.96758 7.81116 7.26328Z"
                                            stroke="Currentcolor" stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M8.04726 11.9531C7.34218 11.6301 6.56562 11.5059 5.74257 11.5059C3.71132 11.5059 1.75429 12.5156 1.26405 14.4824C1.1996 14.7426 1.36288 15 1.63007 15H6.01601"
                                            stroke="Currentcolor" stroke-miterlimit="10" stroke-linecap="round" />
                                    </svg> </div>
                                <div class="pl-3 heading-container">
                                    <p
                                        class="text-base font-medium leading-none text-white group-hover:text-emerald-500">
                                        Customer </p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- form to edit the user -->
                    <div id="cont">

                        <form class="shadow-md rounded px-8 pt-6 pb-8 mb-4" method="post" action="{{ route('update.user') }}" id="form">
                            @csrf
                            <div class="mb-4">
                                <label class="block text-white text-sm font-bold mb-2" for="email">
                                    Name </label>
                                <input
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-white bg-zinc-800 leading-tight focus:outline-none focus:shadow-outline"
                                    id="name" type="text" value="{{Auth::user()->name}}" name="name" required>
                            </div>
                            <div class="mb-6">
                                <label class="block text-white text-sm font-bold mb-2" for="email">
                                    Email </label>
                                <input
                                    class="shadow appearance-none border rounded w-full py-2 px-3 bg-zinc-800 text-white leading-tight focus:outline-none focus:shadow-outline"
                                    id="email" type="email" value="{{Auth::user()->email}}" name="email" required>
                            </div>
                            <div class="mb-6">
                                <label class="block text-white text-sm font-bold mb-2" for="password" name="password">
                                    New password </label>
                                <input
                                    class="shadow appearance-none border text-white rounded w-full py-2 px-3 bg-zinc-800 leading-tight focus:outline-none focus:shadow-outline"
                                    id="password" type="password" name="password" required>
                            </div>
                            <!-- password confirmation -->
                            <div class="mb-6">
                                <label class="block text-white text-sm font-bold mb-2" for="password">
                                    New password confirm </label>
                                <input
                                    class="shadow appearance-none border rounded w-full py-2 px-3 bg-zinc-800 text-white leading-tight focus:outline-none focus:shadow-outline"
                                    id="password" type="password" value="" name="password_confirmation" required>
                            </div>
                            <div class="flex items-center justify-end">
                                <x-button
                                    class=""
                                    type="submit">
                                    Save </x-button>
                            </div>
                        </form>
                    </div>

                    <div id="cv" class="">
                        @include('layouts.user.formProduct')
                    </div>





                </div>

            </div>

        </div>

    </div>

</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('#cv').hide();
        $('#cont').show()
        $('#prod').click(function() {
            $('#cv').show();
            $('#cont').hide();
        });
        $('#acc').click(function() {
            $('#cv').hide();
            $('#cont').show();
        });
    });

</script>
@endsection