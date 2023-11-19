@extends('product.layout.main')

@section('title', 'Detail')

@section('content')
    <div class="w-full h-full px-32 py-12 bg-gray-100">
        <div class="flex flex-col gap-7">
            <div class="flex flex-row p-6 gap-4 items-start rounded-lg bg-white">
                <div class="flex flex-col items-center gap-4">
                    <div class="overflow-hidden">
                        <div class="img-showcase flex w100 transition-all duration-500 ease-in-out">
                            @foreach (range(1, 5) as $i)
                                <img src="{{ asset('assets/product-detail-h'.$i.'.jpg') }}" alt="detail-h{{$i}}">
                            @endforeach
                        </div>
                    </div>
                    <div class="img-select flex justify-between w100">
                        @foreach (range(1, 5) as $i)
                            <a href="#" data-id="{{ $i }}" class="hover:opacity-80 m-1">
                                <img src="{{ asset('assets/product-detail-h'.$i.'.jpg') }}" alt="detail-h{{$i}}">
                            </a>
                        @endforeach
                    </div>
                </div>
                <div class="flex flex-col items-start gap-7">
                    <div class="flex justify-between items-start self-stretch">
                        <div class="flex flex-col items-start gap-2">
                            <h1 class="font-sans font-bold text-4xl tracking-normal text-black">Mobil {{ $vehicle->name }}</h1>
                            <div class="flex items-center gap-6">
                                <div class="flex items-center gap-2">
                                    <h2 class="font-sans font-normal text-2xl tracking-tighter text-black">4.5</h2>
                                    <div class="flex flex-row">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M13.9234 7.19129L11.2456 9.52829L12.0478 13.0077C12.0902 13.1896 12.0781 13.3799 12.013 13.555C11.9478 13.73 11.8325 13.882 11.6814 13.9918C11.5304 14.1017 11.3503 14.1646 11.1637 14.1727C10.9771 14.1807 10.7923 14.1336 10.6323 14.0372L7.59763 12.1966L4.5695 14.0372C4.40953 14.1336 4.22469 14.1807 4.03808 14.1727C3.85148 14.1646 3.67139 14.1017 3.52034 13.9918C3.36929 13.882 3.25398 13.73 3.18883 13.555C3.12367 13.3799 3.11156 13.1896 3.154 13.0077L3.95497 9.53185L1.27657 7.19129C1.1349 7.06911 1.03246 6.90783 0.982099 6.72766C0.931734 6.54749 0.935682 6.35647 0.993449 6.17854C1.05122 6.00061 1.16023 5.84369 1.30682 5.72747C1.45341 5.61125 1.63106 5.54089 1.81747 5.52523L5.34791 5.21945L6.726 1.93245C6.79797 1.75997 6.91936 1.61265 7.07488 1.50902C7.23041 1.40539 7.41312 1.3501 7.6 1.3501C7.78689 1.3501 7.9696 1.40539 8.12512 1.50902C8.28065 1.61265 8.40204 1.75997 8.474 1.93245L9.85625 5.21945L13.3855 5.52523C13.5719 5.54089 13.7496 5.61125 13.8962 5.72747C14.0427 5.84369 14.1518 6.00061 14.2095 6.17854C14.2673 6.35647 14.2712 6.54749 14.2209 6.72766C14.1705 6.90783 14.0681 7.06911 13.9264 7.19129H13.9234Z" fill="black"/>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M13.9234 7.19129L11.2456 9.52829L12.0478 13.0077C12.0902 13.1896 12.0781 13.3799 12.013 13.555C11.9478 13.73 11.8325 13.882 11.6814 13.9918C11.5304 14.1017 11.3503 14.1646 11.1637 14.1727C10.9771 14.1807 10.7923 14.1336 10.6323 14.0372L7.59763 12.1966L4.5695 14.0372C4.40953 14.1336 4.22469 14.1807 4.03808 14.1727C3.85148 14.1646 3.67139 14.1017 3.52034 13.9918C3.36929 13.882 3.25398 13.73 3.18883 13.555C3.12367 13.3799 3.11156 13.1896 3.154 13.0077L3.95497 9.53185L1.27657 7.19129C1.1349 7.06911 1.03246 6.90783 0.982099 6.72766C0.931734 6.54749 0.935682 6.35647 0.993449 6.17854C1.05122 6.00061 1.16023 5.84369 1.30682 5.72747C1.45341 5.61125 1.63106 5.54089 1.81747 5.52523L5.34791 5.21945L6.726 1.93245C6.79797 1.75997 6.91936 1.61265 7.07488 1.50902C7.23041 1.40539 7.41312 1.3501 7.6 1.3501C7.78689 1.3501 7.9696 1.40539 8.12512 1.50902C8.28065 1.61265 8.40204 1.75997 8.474 1.93245L9.85625 5.21945L13.3855 5.52523C13.5719 5.54089 13.7496 5.61125 13.8962 5.72747C14.0427 5.84369 14.1518 6.00061 14.2095 6.17854C14.2673 6.35647 14.2712 6.54749 14.2209 6.72766C14.1705 6.90783 14.0681 7.06911 13.9264 7.19129H13.9234Z" fill="black"/>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M13.9234 7.19129L11.2456 9.52829L12.0478 13.0077C12.0902 13.1896 12.0781 13.3799 12.013 13.555C11.9478 13.73 11.8325 13.882 11.6814 13.9918C11.5304 14.1017 11.3503 14.1646 11.1637 14.1727C10.9771 14.1807 10.7923 14.1336 10.6323 14.0372L7.59763 12.1966L4.5695 14.0372C4.40953 14.1336 4.22469 14.1807 4.03808 14.1727C3.85148 14.1646 3.67139 14.1017 3.52034 13.9918C3.36929 13.882 3.25398 13.73 3.18883 13.555C3.12367 13.3799 3.11156 13.1896 3.154 13.0077L3.95497 9.53185L1.27657 7.19129C1.1349 7.06911 1.03246 6.90783 0.982099 6.72766C0.931734 6.54749 0.935682 6.35647 0.993449 6.17854C1.05122 6.00061 1.16023 5.84369 1.30682 5.72747C1.45341 5.61125 1.63106 5.54089 1.81747 5.52523L5.34791 5.21945L6.726 1.93245C6.79797 1.75997 6.91936 1.61265 7.07488 1.50902C7.23041 1.40539 7.41312 1.3501 7.6 1.3501C7.78689 1.3501 7.9696 1.40539 8.12512 1.50902C8.28065 1.61265 8.40204 1.75997 8.474 1.93245L9.85625 5.21945L13.3855 5.52523C13.5719 5.54089 13.7496 5.61125 13.8962 5.72747C14.0427 5.84369 14.1518 6.00061 14.2095 6.17854C14.2673 6.35647 14.2712 6.54749 14.2209 6.72766C14.1705 6.90783 14.0681 7.06911 13.9264 7.19129H13.9234Z" fill="black"/>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M13.9234 7.19129L11.2456 9.52829L12.0478 13.0077C12.0902 13.1896 12.0781 13.3799 12.013 13.555C11.9478 13.73 11.8325 13.882 11.6814 13.9918C11.5304 14.1017 11.3503 14.1646 11.1637 14.1727C10.9771 14.1807 10.7923 14.1336 10.6323 14.0372L7.59763 12.1966L4.5695 14.0372C4.40953 14.1336 4.22469 14.1807 4.03808 14.1727C3.85148 14.1646 3.67139 14.1017 3.52034 13.9918C3.36929 13.882 3.25398 13.73 3.18883 13.555C3.12367 13.3799 3.11156 13.1896 3.154 13.0077L3.95497 9.53185L1.27657 7.19129C1.1349 7.06911 1.03246 6.90783 0.982099 6.72766C0.931734 6.54749 0.935682 6.35647 0.993449 6.17854C1.05122 6.00061 1.16023 5.84369 1.30682 5.72747C1.45341 5.61125 1.63106 5.54089 1.81747 5.52523L5.34791 5.21945L6.726 1.93245C6.79797 1.75997 6.91936 1.61265 7.07488 1.50902C7.23041 1.40539 7.41312 1.3501 7.6 1.3501C7.78689 1.3501 7.9696 1.40539 8.12512 1.50902C8.28065 1.61265 8.40204 1.75997 8.474 1.93245L9.85625 5.21945L13.3855 5.52523C13.5719 5.54089 13.7496 5.61125 13.8962 5.72747C14.0427 5.84369 14.1518 6.00061 14.2095 6.17854C14.2673 6.35647 14.2712 6.54749 14.2209 6.72766C14.1705 6.90783 14.0681 7.06911 13.9264 7.19129H13.9234Z" fill="black"/>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M15.0026 6.17657C14.945 5.99927 14.8366 5.84281 14.6908 5.72667C14.545 5.61054 14.3683 5.53986 14.1826 5.52345L10.6563 5.21945L9.27405 1.93245C9.20209 1.75997 9.0807 1.61265 8.92517 1.50902C8.76965 1.40539 8.58694 1.3501 8.40005 1.3501C8.21317 1.3501 8.03046 1.40539 7.87493 1.50902C7.71941 1.61265 7.59802 1.75997 7.52605 1.93245L6.14796 5.21945L2.61752 5.52523C2.4311 5.54089 2.25346 5.61125 2.10687 5.72747C1.96028 5.84369 1.85127 6.00061 1.7935 6.17854C1.73573 6.35647 1.73178 6.54749 1.78215 6.72766C1.83251 6.90783 1.93495 7.06911 2.07661 7.19129L4.75502 9.53185L3.95227 13.0077C3.90982 13.1896 3.92194 13.3799 3.98709 13.555C4.05225 13.73 4.16756 13.882 4.31861 13.9918C4.46966 14.1017 4.64974 14.1646 4.83635 14.1727C5.02295 14.1807 5.2078 14.1336 5.36777 14.0372L8.3959 12.1966L11.4306 14.0372C11.5905 14.1336 11.7754 14.1807 11.962 14.1727C12.1486 14.1646 12.3287 14.1017 12.4797 13.9918C12.6308 13.882 12.7461 13.73 12.8112 13.555C12.8764 13.3799 12.8885 13.1896 12.8461 13.0077L12.0439 9.52829L14.7217 7.19129C14.8634 7.06869 14.9656 6.90695 15.0156 6.7264C15.0655 6.54585 15.061 6.35456 15.0026 6.17657ZM14.0989 6.47345L11.4211 8.81045C11.2907 8.92381 11.1938 9.07057 11.1406 9.23493C11.0875 9.39928 11.0802 9.57502 11.1194 9.74323L11.924 13.225L8.89168 11.3844C8.74374 11.2943 8.57386 11.2466 8.40065 11.2466C8.22743 11.2466 8.05756 11.2943 7.90961 11.3844L4.88149 13.225L5.68068 9.7456C5.71995 9.57739 5.71262 9.40166 5.65948 9.2373C5.60633 9.07295 5.50938 8.92619 5.37905 8.81282L2.70005 6.47701C2.69983 6.47524 2.69983 6.47344 2.70005 6.47167L6.2293 6.16648C6.40161 6.15129 6.5665 6.08935 6.70619 5.98733C6.84588 5.88531 6.95506 5.74709 7.02196 5.58757L8.40005 2.30473L9.77755 5.58757C9.84445 5.74709 9.95364 5.88531 10.0933 5.98733C10.233 6.08935 10.3979 6.15129 10.5702 6.16648L14.1001 6.47167C14.1001 6.47167 14.1001 6.47523 14.1001 6.47582L14.0989 6.47345Z" fill="black"/>
                                        </svg>
                                    </div>
                                    <div style="width: 1px; height: 25.65px; background-color: black;"></div>
                                    <h2 class="font-sans font-normal tracking-tighter text-2xl">16 Rated</h2>
                                    <div style="width: 1px; height: 25.65px; background-color: black;"></div>
                                    <h2 class="font-sans font-normal tracking-tighter text-2xl">20 Rented</h2>
                                </div>
                            </div>
                        </div>
                        {{-- INI ADLAH BAGIAN LOVE YANG PERLU DIUBAH --}}
                        <div>
                            <svg class="cursor-pointer" id="favDetailProduct" xmlns="http://www.w3.org/2000/svg" width="25" height="23" viewBox="0 0 25 23" fill="none">
                                <path d="M24.0001 7.71388C24.0001 9.48503 23.32 11.1862 22.1055 12.4447C19.31 15.3423 16.5986 18.3639 13.6986 21.1566C13.0339 21.7874 11.9794 21.7644 11.3434 21.105L2.9885 12.4447C0.463145 9.82689 0.463145 5.60085 2.9885 2.98313C5.53867 0.339689 9.69316 0.339689 12.2433 2.98313L12.547 3.29791L12.8505 2.98331C14.0732 1.71523 15.7385 1 17.478 1C19.2176 1 20.8827 1.71516 22.1055 2.98313C23.3201 4.24165 24.0001 5.94276 24.0001 7.71388Z" fill="#FF0000" stroke="black" stroke-width="1.9" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                    <div class="self-stretch">
                        <h3 class="font-sans font-normal text-base text-black ">
                            Lorem ipsum dolor sit amet consectetur. Tempor id nunc cursus euismod id egestas. Iaculis nec cursus sit proin urna lorem ac potenti morbi. Lorem ipsum dolor sit amet consectetur. Tempor id nunc cursus euismod id egestas. Iaculis nec cursus sit proin urna lorem ac potenti morbi. Lorem ipsum dolor sit amet consectetur. Tempor id nunc cursus euismod id egestas. Iaculis nec cursus sit proin urna lorem ac potenti morbi. Lorem ipsum dolor sit amet consectetur. Tempor id nunc cursus euismod id egestas. Iaculis nec cursus sit proin urna lorem ac potenti morbi.
                        </h3>
                    </div>
                    <div class="flex flex-start gap-9">
                        <div class="flex flex-col items-start gap-6">
                            @foreach(['Type Car' => '1.1 RB', 'Steering' => '15'] as $label => $value)
                                <div class="flex w-[137px] justify-between items-start">
                                    <h3 class="font-sans font-normal tracking-tight text-sm text-black">{{ $label }}</h3>
                                    <h3 class="font-sans font-medium tracking-tight text-sm text-blue-900">{{ $value }}</h3>
                                </div>
                            @endforeach
                        </div>
                        <div class="flex flex-col items-start gap-6">
                            @foreach(['Capacity' => '2 Person', 'Fuel Type' => 'Gasoline'] as $label => $value)
                                <div class="flex w-[137px] justify-between items-start">
                                    <h3 class="font-sans font-normal tracking-tight text-sm text-black">{{ $label }}</h3>
                                    <h3 class="font-sans font-medium tracking-tight text-sm text-blue-900">{{ $value }}</h3>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="flex justify-between items-start self-stretch">
                        <div class="w-auto h-14 flex flex-col">
                            <div class="flex flex-row">
                                <h3 class="font-sans font-bold text-2xl text-black">Rp. 5.000.000/</h3>
                                <h4 class="font-sans font-normal self-end text-sm text-gray-400">days</h4>
                            </div>
                            <h4 class="font-sans font-normal line-through text-sm text-gray-400">Rp. 10.000.000</h4>
                        </div>
                        <button class="flex px-5 py-3.5 justify-center items-center rounded-lg bg-blue-600 font-sans text-sm font-semibold text-white">Rent Now</button>
                    </div>
                </div>
            </div>
            <div class="flex flex-row py-3 px-6 items-center gap-6 rounded-lg bg-white">
                <div class="flex items-center self-center w-20 h-20 rounded-full bg-gray-400"></div>
                <div class="flex h-[99px] flex-col justify-between items-start gap-3">
                    <div class="flex h-[61px] flex-col justify-between items-start">
                        <h3 class="font-sans font-normal text-xl text-black">ariz_jaya_rent</h3>
                        <h4 class="font-sans font-normal text-sm text-black tracking-tight">Active 1 Hour Ago</h4>
                    </div>
                    <div class="flex flex-start gap-4">
                        <div class="flex flex-row justify-center items-center px-1.5 w-28 h-9 rounded-sm gap-2 border border-black bg-neutral-400">
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                                <path d="M15.3923 12.4399C15.767 11.6783 15.9537 10.838 15.9369 9.98937C15.92 9.14076 15.7001 8.30853 15.2955 7.5624C14.8909 6.81626 14.3134 6.17794 13.6114 5.70087C12.9093 5.22381 12.1032 4.9219 11.2605 4.82043C10.9811 4.16893 10.574 3.57996 10.0634 3.08822C9.55277 2.59647 8.94888 2.21189 8.28733 1.95715C7.62577 1.7024 6.91992 1.58264 6.21136 1.60492C5.5028 1.62719 4.80586 1.79106 4.16161 2.08686C3.51736 2.38265 2.93883 2.8044 2.4601 3.32725C1.98138 3.8501 1.61213 4.46348 1.37413 5.13124C1.13613 5.79901 1.03419 6.50765 1.07431 7.21543C1.11442 7.9232 1.29579 8.61579 1.60772 9.25238L1.09905 11.0334C1.05366 11.1927 1.05167 11.3613 1.09329 11.5217C1.13491 11.682 1.21863 11.8284 1.33578 11.9455C1.45293 12.0627 1.59925 12.1464 1.75961 12.188C1.91997 12.2296 2.08854 12.2276 2.24788 12.1822L4.02889 11.6736C4.56633 11.9374 5.14443 12.1087 5.73886 12.1802C6.02221 12.8441 6.43787 13.4433 6.96047 13.9411C7.48308 14.439 8.10166 14.8252 8.77846 15.076C9.45527 15.3269 10.1761 15.4372 10.8969 15.4003C11.6178 15.3633 12.3236 15.1798 12.9712 14.8611L14.7522 15.3697C14.9115 15.4151 15.0801 15.4171 15.2404 15.3755C15.4008 15.3339 15.5471 15.2502 15.6643 15.133C15.7814 15.0159 15.8651 14.8695 15.9068 14.7092C15.9484 14.5488 15.9464 14.3802 15.901 14.2209L15.3923 12.4399ZM4.086 10.5739C4.03663 10.5739 3.98748 10.5806 3.93991 10.5938L2.18612 11.0952L2.68749 9.34137C2.72506 9.20775 2.70885 9.06474 2.64233 8.94293C2.15386 8.04613 2.0049 7.00335 2.22275 6.00566C2.4406 5.00797 3.01067 4.12219 3.8285 3.51063C4.64633 2.89907 5.65715 2.6027 6.67573 2.67582C7.69431 2.74893 8.65243 3.18664 9.37453 3.90874C10.0966 4.63084 10.5343 5.58896 10.6075 6.60754C10.6806 7.62612 10.3842 8.63693 9.77264 9.45477C9.16108 10.2726 8.2753 10.8427 7.27761 11.0605C6.27992 11.2784 5.23713 11.1294 4.34034 10.6409C4.26259 10.5975 4.17509 10.5744 4.086 10.5739ZM14.3126 12.5289L14.8139 14.2827L13.0601 13.7813C12.9265 13.7437 12.7835 13.7599 12.6617 13.8264C11.6824 14.3592 10.5331 14.4863 9.46108 14.1803C8.38906 13.8743 7.48 13.1597 6.92952 12.1902C7.65697 12.1144 8.36091 11.8892 8.99718 11.5285C9.63345 11.1678 10.1883 10.6795 10.627 10.0943C11.0656 9.50906 11.3786 8.83948 11.5462 8.12757C11.7139 7.41566 11.7326 6.67679 11.6012 5.9573C12.2378 6.10733 12.8312 6.40225 13.3351 6.8191C13.8391 7.23595 14.24 7.76349 14.5068 8.36065C14.7735 8.95781 14.8988 9.60847 14.873 10.262C14.8471 10.9155 14.6708 11.5542 14.3577 12.1284C14.2907 12.2508 14.2744 12.3946 14.3126 12.5289Z" fill="black"/>
                            </svg>
                            <h4 class="font-sans font-normal text-sm text-black">Chat Now</h4>
                        </div>
                        <div class="flex flex-row justify-center items-center px-1.5 w-32 h-9 rounded-sm gap-2 border border-black bg-neutral-400">
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                                <path d="M1.59375 6.90626H3.1875V11.1563H2.125C1.9841 11.1563 1.84898 11.2122 1.74935 11.3119C1.64972 11.4115 1.59375 11.5466 1.59375 11.6875C1.59375 11.8284 1.64972 11.9635 1.74935 12.0632C1.84898 12.1628 1.9841 12.2188 2.125 12.2188H14.875C15.0159 12.2188 15.151 12.1628 15.2507 12.0632C15.3503 11.9635 15.4062 11.8284 15.4062 11.6875C15.4062 11.5466 15.3503 11.4115 15.2507 11.3119C15.151 11.2122 15.0159 11.1563 14.875 11.1563H13.8125V6.90626H15.4062C15.5218 6.90614 15.6342 6.86833 15.7264 6.79855C15.8185 6.72878 15.8854 6.63085 15.9169 6.51963C15.9484 6.40841 15.9427 6.28995 15.9008 6.18224C15.8588 6.07453 15.7829 5.98344 15.6845 5.92278L8.77824 1.67278C8.69456 1.62133 8.59824 1.59409 8.5 1.59409C8.40176 1.59409 8.30545 1.62133 8.22176 1.67278L1.31551 5.92278C1.21711 5.98344 1.14118 6.07453 1.09924 6.18224C1.0573 6.28995 1.05163 6.40841 1.0831 6.51963C1.11457 6.63085 1.18145 6.72878 1.27361 6.79855C1.36576 6.86833 1.47816 6.90614 1.59375 6.90626ZM4.25 6.90626H6.375V11.1563H4.25V6.90626ZM9.5625 6.90626V11.1563H7.4375V6.90626H9.5625ZM12.75 11.1563H10.625V6.90626H12.75V11.1563ZM8.5 2.74856L13.5296 5.84376H3.47039L8.5 2.74856ZM16.4688 13.8125C16.4688 13.9534 16.4128 14.0885 16.3132 14.1882C16.2135 14.2878 16.0784 14.3438 15.9375 14.3438H1.0625C0.921604 14.3438 0.786478 14.2878 0.68685 14.1882C0.587221 14.0885 0.53125 13.9534 0.53125 13.8125C0.53125 13.6716 0.587221 13.5365 0.68685 13.4369C0.786478 13.3372 0.921604 13.2813 1.0625 13.2813H15.9375C16.0784 13.2813 16.2135 13.3372 16.3132 13.4369C16.4128 13.5365 16.4688 13.6716 16.4688 13.8125Z" fill="black"/>
                            </svg>
                            <h4 class="font-sans font-normal text-sm text-black">Kunjungi Toko</h4>
                        </div>
                    </div>
                </div>
                <div style="width: 1px; height: 81px; background-color: black;"></div>
                <div class="flex flex-col h-[78px] gap-8 items-start">
                    <div class="flex items-start justify-between self-stretch gap-20">
                        <div class="flex w-32 justify-between items-start">
                            <h3 class="font-sans font-normal text-sm text-black">Rated</h3>
                            <h3 class="font-sans font-medium text-sm text-blue-900">1.1 K</h3>
                        </div>
                        <div class="flex w-72 justify-between items-start">
                            <h3 class="font-sans font-normal text-sm text-black">Percentage of Chats Replied</h3>
                            <h3 class="font-sans font-medium text-sm text-blue-900">95%</h3>
                        </div>
                        <div class="flex w-52 justify-between items-start">
                            <h3 class="font-sans font-normal text-sm text-black">Join</h3>
                            <h3 class="font-sans font-medium text-sm text-blue-900">2 years ago</h3>
                        </div>
                    </div>
                    <div class="flex items-start justify-between self-stretch gap-20">
                        <div class="flex w-32 justify-between items-start">
                            <h3 class="font-sans font-normal text-sm text-black">Product</h3>
                            <h3 class="font-sans font-medium text-sm text-blue-900">15</h3>
                        </div>
                        <div class="flex w-72 justify-between items-start">
                            <h3 class="font-sans font-normal text-sm text-black">Chat Time to Reply</h3>
                            <h3 class="font-sans font-medium text-sm text-blue-900">a matter of hours</h3>
                        </div>
                        <div class="flex w-52 justify-between items-start">
                            <h3 class="font-sans font-normal text-sm text-black">Followers</h3>
                            <h3 class="font-sans font-medium text-sm text-blue-900">2 K</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex gap-6">
                <div class="flex w-fit py-8 px-6 items-start gap-7 rounded-lg bg-white">
                    <div class="flex flex-col items-start gap-3">
                        <h2 class="font-sans text-xl font-bold text-black">User Review</h2>
                        <div class="flex h-[100px] w-52 flex-col justify-between items-center gap-1">
                            <div class="flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="20" viewBox="0 0 22 20" fill="none">
                                    <path d="M7.50639 6.14665L10.1656 0.790281C10.5069 0.102662 11.4931 0.102662 11.8344 0.790281L14.4936 6.14665L20.4403 7.01089C21.2033 7.12177 21.5074 8.0543 20.9551 8.5892L16.6527 12.7557L17.6681 18.6417C17.7985 19.3976 17.0005 19.974 16.3178 19.617L11 16.8365L5.6822 19.617C4.99951 19.974 4.2015 19.3976 4.33188 18.6417L5.34722 12.7557L1.04499 8.5892C0.492606 8.0543 0.796706 7.12177 1.55969 7.01089L7.50639 6.14665Z" fill="#FFC400"/>
                                </svg>
                                <h2 class="ps-3 flex justify-center font-sans text-6xl font-bold text-black">5.0</h2>
                                <h3 class="font-sans font-bold text-lg text-black self-end">/5.0</h3>
                            </div>
                            <h2 class="font-sans font-bold text-sm text-black">100% buyers are satisfied</h2>
                            <h2 class="font-sans font-bold text-sm text-black">16 rating | 5 review</h2>
                        </div>
                        <div class="flex h-[105px] flex-col justify-between items-start">
                            <div class="flex flex-col w-48 justify-between items-center">
                                @php
                                    $a = 0;
                                    foreach (range(1, 5) as $i) {
                                        $a += pow((5 - $i), 3);
                                    }
                                @endphp
                                @foreach (range(1, 5) as $i)
                                    <div class="flex items-center justify-between gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <path d="M3.65743 3.91015L5.09963 1.00513C5.28474 0.632201 5.81963 0.632201 6.00474 1.00513L7.44692 3.91015L10.6721 4.37886C11.0859 4.439 11.2508 4.94476 10.9513 5.23486L8.61793 7.49454L9.1686 10.6868C9.23933 11.0968 8.80654 11.4094 8.43626 11.2158L5.55218 9.70775L2.66809 11.2158C2.29783 11.4094 1.86503 11.0968 1.93574 10.6868L2.48641 7.49454L0.153102 5.23486C-0.146482 4.94476 0.0184454 4.439 0.43225 4.37886L3.65743 3.91015Z" fill="#FFC400"/>
                                        </svg>
                                        <h4 class="font-sans text-xs font-bold text-black">{{6-$i}}</h4>
                                        <div style="width: 146px; height: 5px; flex-shrink: 0; border-radius: 90px; background: #B0B0B0;">
                                            <div style="width: {{(5-$i)**3*100/$a}}%; height: 5px; border-radius: 90px; background: #84ffb5;"></div>
                                        </div>
                                        <h4 class="font-sans text-xs font-bold text-black">{{(5-$i)**3}}</h4>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="flex flex-col w-52 items-start rounded-lg border border-gray-400">
                            <h2 class="flex w-[113px] h-[46px] px-1 items-center font-sans text-sm font-bold text-black">RIVIEW FILTER</h2>
                            <div class="relative inline-flex w-full h-[46px] justify-between items-center border-t border-gray-400">
                                <button type="button" id="media-button" class="flex flex-row w-full justify-between items-center rounded-md bg-white px-3.5 py-2 text-sm font-bold text-gray-900 shadow-sm ring-inset ring-gray-300 hover:bg-gray-50 font-sans" aria-expanded="true" aria-haspopup="true">
                                    Media
                                    <svg xmlns="http://www.w3.org/2000/svg" width="11" height="8" viewBox="0 0 11 8" fill="none" aria-hidden="true">
                                        <path d="M0.839355 1.70984L5.41969 6.29018L10 1.70984" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                                <div id="media-dd" class="hidden absolute top-8 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="media-button" tabindex="-1">
                                    <div class="py-1" role="none">
                                        <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="media-menu-item-0">Account settings</a>
                                        <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="media-menu-item-1">Support</a>
                                        <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="media-menu-item-2">License</a>
                                        <form method="POST" action="#" role="none"></form>
                                    </div>
                                </div>
                            </div>
                            <div class="relative inline-flex w-full h-[46px] justify-between items-center border-t border-gray-400">
                                <button type="button" id="rating-button" class="flex flex-row w-full justify-between items-center rounded-md bg-white px-3.5 py-2 text-sm font-bold text-gray-900 shadow-sm ring-inset ring-gray-300 hover:bg-gray-50 font-sans" aria-expanded="true" aria-haspopup="true">
                                    Rating
                                    <svg xmlns="http://www.w3.org/2000/svg" width="11" height="8" viewBox="0 0 11 8" fill="none" aria-hidden="true">
                                        <path d="M0.839355 1.70984L5.41969 6.29018L10 1.70984" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                                <div id="rating-dd" class="hidden absolute top-8 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="rating-button" tabindex="-1">
                                    <div class="py-1" role="none">
                                        <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="media-menu-item-0">Account settings</a>
                                        <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="media-menu-item-1">Support</a>
                                        <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="media-menu-item-2">License</a>
                                        <form method="POST" action="#" role="none"></form>
                                    </div>
                                </div>
                            </div>
                            <div class="relative inline-flex w-full h-[46px] justify-between items-center border-t border-gray-400">
                                <button type="button" id="topik-ulasan-button" class="flex flex-row w-full justify-between items-center rounded-md bg-white px-3.5 py-2 text-sm font-bold text-gray-900 shadow-sm ring-inset ring-gray-300 hover:bg-gray-50 font-sans" aria-expanded="true" aria-haspopup="true">
                                    Review Topics
                                    <svg xmlns="http://www.w3.org/2000/svg" width="11" height="8" viewBox="0 0 11 8" fill="none" aria-hidden="true">
                                        <path d="M0.839355 1.70984L5.41969 6.29018L10 1.70984" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                                <div id="topik-ulasan-dd" class="hidden absolute top-8 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="topik-ulasan-button" tabindex="-1">
                                    <div class="py-1" role="none">
                                        <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="media-menu-item-0">Account settings</a>
                                        <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="media-menu-item-1">Support</a>
                                        <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="media-menu-item-2">License</a>
                                        <form method="POST" action="#" role="none"></form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex h-auto pt-6 flex-col justify-between items-start">
                        <div class="flex h-16 flex-col gap-2 items-start">
                            <h2 class="font-sans text-sm font-bold text-black">Top Review</h2>
                            <h3 class="font-sans text-xs font-normal text-black">Show 5 of 5 review</h3>
                        </div>
                        <div class="flex flex-col justify-between items-end h-auto gap-8">
                            <div class="flex h-auto w-full flex-col items-start justify-between gap-1">
                                <div class="flex w-[149px] justify-between items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                        <path d="M4.24741 4.57302L5.92225 1.19939C6.13722 0.766301 6.7584 0.766301 6.97337 1.19939L8.64819 4.57302L12.3937 5.11734C12.8742 5.18718 13.0657 5.77452 12.7179 6.11142L10.0081 8.73562L10.6476 12.4428C10.7297 12.919 10.2271 13.282 9.79713 13.0571L6.44781 11.3058L3.09848 13.0571C2.66849 13.282 2.16588 12.919 2.248 12.4428L2.88749 8.73562L0.177799 6.11142C-0.170112 5.77452 0.0214208 5.18718 0.501976 5.11734L4.24741 4.57302Z" fill="#FFC400"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                        <path d="M4.24741 4.57302L5.92225 1.19939C6.13722 0.766301 6.7584 0.766301 6.97337 1.19939L8.64819 4.57302L12.3937 5.11734C12.8742 5.18718 13.0657 5.77452 12.7179 6.11142L10.0081 8.73562L10.6476 12.4428C10.7297 12.919 10.2271 13.282 9.79713 13.0571L6.44781 11.3058L3.09848 13.0571C2.66849 13.282 2.16588 12.919 2.248 12.4428L2.88749 8.73562L0.177799 6.11142C-0.170112 5.77452 0.0214208 5.18718 0.501976 5.11734L4.24741 4.57302Z" fill="#FFC400"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                        <path d="M4.24741 4.57302L5.92225 1.19939C6.13722 0.766301 6.7584 0.766301 6.97337 1.19939L8.64819 4.57302L12.3937 5.11734C12.8742 5.18718 13.0657 5.77452 12.7179 6.11142L10.0081 8.73562L10.6476 12.4428C10.7297 12.919 10.2271 13.282 9.79713 13.0571L6.44781 11.3058L3.09848 13.0571C2.66849 13.282 2.16588 12.919 2.248 12.4428L2.88749 8.73562L0.177799 6.11142C-0.170112 5.77452 0.0214208 5.18718 0.501976 5.11734L4.24741 4.57302Z" fill="#FFC400"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                        <path d="M4.24741 4.57302L5.92225 1.19939C6.13722 0.766301 6.7584 0.766301 6.97337 1.19939L8.64819 4.57302L12.3937 5.11734C12.8742 5.18718 13.0657 5.77452 12.7179 6.11142L10.0081 8.73562L10.6476 12.4428C10.7297 12.919 10.2271 13.282 9.79713 13.0571L6.44781 11.3058L3.09848 13.0571C2.66849 13.282 2.16588 12.919 2.248 12.4428L2.88749 8.73562L0.177799 6.11142C-0.170112 5.77452 0.0214208 5.18718 0.501976 5.11734L4.24741 4.57302Z" fill="#FFC400"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                        <path d="M4.24741 4.57302L5.92225 1.19939C6.13722 0.766301 6.7584 0.766301 6.97337 1.19939L8.64819 4.57302L12.3937 5.11734C12.8742 5.18718 13.0657 5.77452 12.7179 6.11142L10.0081 8.73562L10.6476 12.4428C10.7297 12.919 10.2271 13.282 9.79713 13.0571L6.44781 11.3058L3.09848 13.0571C2.66849 13.282 2.16588 12.919 2.248 12.4428L2.88749 8.73562L0.177799 6.11142C-0.170112 5.77452 0.0214208 5.18718 0.501976 5.11734L4.24741 4.57302Z" fill="#FFC400"/>
                                    </svg>
                                    <h3 class="font-sans text-xs font-normal text-gray-400">1 week ago</h3>
                                </div>
                                <div class="flex items-center gap-2">
                                    <div class="flex items-center self-center w-6 h-6 rounded-full bg-gray-400"></div>
                                    <h3 class="font-sans font-medium text-xs text-black">Maulana</h3>
                                </div>
                                <h3 class="font-sans font-medium text-xs text-black">nice</h3>
                                <div class="pb-3 flex flex-row items-start justify-between w-[502px] border-b border-gray-400">
                                    <div class="flex w-36 items-center justify-between">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="12" viewBox="0 0 11 12" fill="none">
                                            <path d="M8.14295 10.7575H1.33038C1.14791 10.7575 1 10.6096 1 10.4271V5.03099C1 4.84853 1.14791 4.70061 1.33038 4.70061H2.8543C3.24113 4.70061 3.5996 4.49765 3.79862 4.16595L5.29104 1.67856C5.6131 1.14184 6.37159 1.09082 6.76259 1.57958C6.94688 1.80996 7.00629 2.11616 6.9215 2.39875L6.35854 4.2753C6.29494 4.48728 6.45369 4.70061 6.67498 4.70061H9.19416C9.92027 4.70061 10.4477 5.3911 10.2566 6.0916L9.20539 9.94599C9.07472 10.4251 8.63956 10.7575 8.14295 10.7575Z" stroke="black" stroke-linecap="round"/>
                                            <path d="M2.92712 10.7575V4.70062" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <h3 class="font-sans text-xs font-medium text-black">This review was helpful</h3>
                                    </div>
                                    <button type="button" class="flex w-20 justify-between items-center">
                                        <h3 class="font-sans text-xs font-medium text-black text-center">See reply</h3>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="8" viewBox="0 0 12 8" fill="none">
                                            <path d="M1.13538 1.70984L5.71571 6.29018L10.2961 1.70984" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="flex h-auto w-full flex-col items-start justify-between gap-1">
                                <div class="flex w-[149px] justify-between items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                        <path d="M4.24741 4.57302L5.92225 1.19939C6.13722 0.766301 6.7584 0.766301 6.97337 1.19939L8.64819 4.57302L12.3937 5.11734C12.8742 5.18718 13.0657 5.77452 12.7179 6.11142L10.0081 8.73562L10.6476 12.4428C10.7297 12.919 10.2271 13.282 9.79713 13.0571L6.44781 11.3058L3.09848 13.0571C2.66849 13.282 2.16588 12.919 2.248 12.4428L2.88749 8.73562L0.177799 6.11142C-0.170112 5.77452 0.0214208 5.18718 0.501976 5.11734L4.24741 4.57302Z" fill="#FFC400"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                        <path d="M4.24741 4.57302L5.92225 1.19939C6.13722 0.766301 6.7584 0.766301 6.97337 1.19939L8.64819 4.57302L12.3937 5.11734C12.8742 5.18718 13.0657 5.77452 12.7179 6.11142L10.0081 8.73562L10.6476 12.4428C10.7297 12.919 10.2271 13.282 9.79713 13.0571L6.44781 11.3058L3.09848 13.0571C2.66849 13.282 2.16588 12.919 2.248 12.4428L2.88749 8.73562L0.177799 6.11142C-0.170112 5.77452 0.0214208 5.18718 0.501976 5.11734L4.24741 4.57302Z" fill="#FFC400"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                        <path d="M4.24741 4.57302L5.92225 1.19939C6.13722 0.766301 6.7584 0.766301 6.97337 1.19939L8.64819 4.57302L12.3937 5.11734C12.8742 5.18718 13.0657 5.77452 12.7179 6.11142L10.0081 8.73562L10.6476 12.4428C10.7297 12.919 10.2271 13.282 9.79713 13.0571L6.44781 11.3058L3.09848 13.0571C2.66849 13.282 2.16588 12.919 2.248 12.4428L2.88749 8.73562L0.177799 6.11142C-0.170112 5.77452 0.0214208 5.18718 0.501976 5.11734L4.24741 4.57302Z" fill="#FFC400"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                        <path d="M4.24741 4.57302L5.92225 1.19939C6.13722 0.766301 6.7584 0.766301 6.97337 1.19939L8.64819 4.57302L12.3937 5.11734C12.8742 5.18718 13.0657 5.77452 12.7179 6.11142L10.0081 8.73562L10.6476 12.4428C10.7297 12.919 10.2271 13.282 9.79713 13.0571L6.44781 11.3058L3.09848 13.0571C2.66849 13.282 2.16588 12.919 2.248 12.4428L2.88749 8.73562L0.177799 6.11142C-0.170112 5.77452 0.0214208 5.18718 0.501976 5.11734L4.24741 4.57302Z" fill="#FFC400"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                        <path d="M4.24741 4.57302L5.92225 1.19939C6.13722 0.766301 6.7584 0.766301 6.97337 1.19939L8.64819 4.57302L12.3937 5.11734C12.8742 5.18718 13.0657 5.77452 12.7179 6.11142L10.0081 8.73562L10.6476 12.4428C10.7297 12.919 10.2271 13.282 9.79713 13.0571L6.44781 11.3058L3.09848 13.0571C2.66849 13.282 2.16588 12.919 2.248 12.4428L2.88749 8.73562L0.177799 6.11142C-0.170112 5.77452 0.0214208 5.18718 0.501976 5.11734L4.24741 4.57302Z" fill="#FFC400"/>
                                    </svg>
                                    <h3 class="font-sans text-xs font-normal text-gray-400">1 week ago</h3>
                                </div>
                                <div class="flex items-center gap-2">
                                    <div class="flex items-center self-center w-6 h-6 rounded-full bg-gray-400"></div>
                                    <h3 class="font-sans font-medium text-xs text-black">Maulana</h3>
                                </div>
                                <h3 class="font-sans font-medium text-xs text-black">nice</h3>
                                <div class="pb-3 flex flex-row items-start justify-between w-[502px] border-b border-gray-400">
                                    <div class="flex w-36 items-center justify-between">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="12" viewBox="0 0 11 12" fill="none">
                                            <path d="M8.14295 10.7575H1.33038C1.14791 10.7575 1 10.6096 1 10.4271V5.03099C1 4.84853 1.14791 4.70061 1.33038 4.70061H2.8543C3.24113 4.70061 3.5996 4.49765 3.79862 4.16595L5.29104 1.67856C5.6131 1.14184 6.37159 1.09082 6.76259 1.57958C6.94688 1.80996 7.00629 2.11616 6.9215 2.39875L6.35854 4.2753C6.29494 4.48728 6.45369 4.70061 6.67498 4.70061H9.19416C9.92027 4.70061 10.4477 5.3911 10.2566 6.0916L9.20539 9.94599C9.07472 10.4251 8.63956 10.7575 8.14295 10.7575Z" stroke="black" stroke-linecap="round"/>
                                            <path d="M2.92712 10.7575V4.70062" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <h3 class="font-sans text-xs font-medium text-black">This review was helpful</h3>
                                    </div>
                                    <button type="button" class="flex w-20 justify-between items-center">
                                        <h3 class="font-sans text-xs font-medium text-black text-center">See reply</h3>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="8" viewBox="0 0 12 8" fill="none">
                                            <path d="M1.13538 1.70984L5.71571 6.29018L10.2961 1.70984" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="flex h-auto w-full flex-col items-start justify-between gap-1">
                                <div class="flex w-[149px] justify-between items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                        <path d="M4.24741 4.57302L5.92225 1.19939C6.13722 0.766301 6.7584 0.766301 6.97337 1.19939L8.64819 4.57302L12.3937 5.11734C12.8742 5.18718 13.0657 5.77452 12.7179 6.11142L10.0081 8.73562L10.6476 12.4428C10.7297 12.919 10.2271 13.282 9.79713 13.0571L6.44781 11.3058L3.09848 13.0571C2.66849 13.282 2.16588 12.919 2.248 12.4428L2.88749 8.73562L0.177799 6.11142C-0.170112 5.77452 0.0214208 5.18718 0.501976 5.11734L4.24741 4.57302Z" fill="#FFC400"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                        <path d="M4.24741 4.57302L5.92225 1.19939C6.13722 0.766301 6.7584 0.766301 6.97337 1.19939L8.64819 4.57302L12.3937 5.11734C12.8742 5.18718 13.0657 5.77452 12.7179 6.11142L10.0081 8.73562L10.6476 12.4428C10.7297 12.919 10.2271 13.282 9.79713 13.0571L6.44781 11.3058L3.09848 13.0571C2.66849 13.282 2.16588 12.919 2.248 12.4428L2.88749 8.73562L0.177799 6.11142C-0.170112 5.77452 0.0214208 5.18718 0.501976 5.11734L4.24741 4.57302Z" fill="#FFC400"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                        <path d="M4.24741 4.57302L5.92225 1.19939C6.13722 0.766301 6.7584 0.766301 6.97337 1.19939L8.64819 4.57302L12.3937 5.11734C12.8742 5.18718 13.0657 5.77452 12.7179 6.11142L10.0081 8.73562L10.6476 12.4428C10.7297 12.919 10.2271 13.282 9.79713 13.0571L6.44781 11.3058L3.09848 13.0571C2.66849 13.282 2.16588 12.919 2.248 12.4428L2.88749 8.73562L0.177799 6.11142C-0.170112 5.77452 0.0214208 5.18718 0.501976 5.11734L4.24741 4.57302Z" fill="#FFC400"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                        <path d="M4.24741 4.57302L5.92225 1.19939C6.13722 0.766301 6.7584 0.766301 6.97337 1.19939L8.64819 4.57302L12.3937 5.11734C12.8742 5.18718 13.0657 5.77452 12.7179 6.11142L10.0081 8.73562L10.6476 12.4428C10.7297 12.919 10.2271 13.282 9.79713 13.0571L6.44781 11.3058L3.09848 13.0571C2.66849 13.282 2.16588 12.919 2.248 12.4428L2.88749 8.73562L0.177799 6.11142C-0.170112 5.77452 0.0214208 5.18718 0.501976 5.11734L4.24741 4.57302Z" fill="#FFC400"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                        <path d="M4.24741 4.57302L5.92225 1.19939C6.13722 0.766301 6.7584 0.766301 6.97337 1.19939L8.64819 4.57302L12.3937 5.11734C12.8742 5.18718 13.0657 5.77452 12.7179 6.11142L10.0081 8.73562L10.6476 12.4428C10.7297 12.919 10.2271 13.282 9.79713 13.0571L6.44781 11.3058L3.09848 13.0571C2.66849 13.282 2.16588 12.919 2.248 12.4428L2.88749 8.73562L0.177799 6.11142C-0.170112 5.77452 0.0214208 5.18718 0.501976 5.11734L4.24741 4.57302Z" fill="#FFC400"/>
                                    </svg>
                                    <h3 class="font-sans text-xs font-normal text-gray-400">1 week ago</h3>
                                </div>
                                <div class="flex items-center gap-2">
                                    <div class="flex items-center self-center w-6 h-6 rounded-full bg-gray-400"></div>
                                    <h3 class="font-sans font-medium text-xs text-black">Maulana</h3>
                                </div>
                                <h3 class="font-sans font-medium text-xs text-black">nice</h3>
                                <div class="pb-3 flex flex-row items-start justify-between w-[502px] border-b border-gray-400">
                                    <div class="flex w-36 items-center justify-between">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="12" viewBox="0 0 11 12" fill="none">
                                            <path d="M8.14295 10.7575H1.33038C1.14791 10.7575 1 10.6096 1 10.4271V5.03099C1 4.84853 1.14791 4.70061 1.33038 4.70061H2.8543C3.24113 4.70061 3.5996 4.49765 3.79862 4.16595L5.29104 1.67856C5.6131 1.14184 6.37159 1.09082 6.76259 1.57958C6.94688 1.80996 7.00629 2.11616 6.9215 2.39875L6.35854 4.2753C6.29494 4.48728 6.45369 4.70061 6.67498 4.70061H9.19416C9.92027 4.70061 10.4477 5.3911 10.2566 6.0916L9.20539 9.94599C9.07472 10.4251 8.63956 10.7575 8.14295 10.7575Z" stroke="black" stroke-linecap="round"/>
                                            <path d="M2.92712 10.7575V4.70062" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <h3 class="font-sans text-xs font-medium text-black">This review was helpful</h3>
                                    </div>
                                    <button type="button" class="flex w-20 justify-between items-center">
                                        <h3 class="font-sans text-xs font-medium text-black text-center">See reply</h3>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="8" viewBox="0 0 12 8" fill="none">
                                            <path d="M1.13538 1.70984L5.71571 6.29018L10.2961 1.70984" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="flex h-auto w-full flex-col items-start justify-between gap-1">
                                <div class="flex w-[149px] justify-between items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                        <path d="M4.24741 4.57302L5.92225 1.19939C6.13722 0.766301 6.7584 0.766301 6.97337 1.19939L8.64819 4.57302L12.3937 5.11734C12.8742 5.18718 13.0657 5.77452 12.7179 6.11142L10.0081 8.73562L10.6476 12.4428C10.7297 12.919 10.2271 13.282 9.79713 13.0571L6.44781 11.3058L3.09848 13.0571C2.66849 13.282 2.16588 12.919 2.248 12.4428L2.88749 8.73562L0.177799 6.11142C-0.170112 5.77452 0.0214208 5.18718 0.501976 5.11734L4.24741 4.57302Z" fill="#FFC400"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                        <path d="M4.24741 4.57302L5.92225 1.19939C6.13722 0.766301 6.7584 0.766301 6.97337 1.19939L8.64819 4.57302L12.3937 5.11734C12.8742 5.18718 13.0657 5.77452 12.7179 6.11142L10.0081 8.73562L10.6476 12.4428C10.7297 12.919 10.2271 13.282 9.79713 13.0571L6.44781 11.3058L3.09848 13.0571C2.66849 13.282 2.16588 12.919 2.248 12.4428L2.88749 8.73562L0.177799 6.11142C-0.170112 5.77452 0.0214208 5.18718 0.501976 5.11734L4.24741 4.57302Z" fill="#FFC400"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                        <path d="M4.24741 4.57302L5.92225 1.19939C6.13722 0.766301 6.7584 0.766301 6.97337 1.19939L8.64819 4.57302L12.3937 5.11734C12.8742 5.18718 13.0657 5.77452 12.7179 6.11142L10.0081 8.73562L10.6476 12.4428C10.7297 12.919 10.2271 13.282 9.79713 13.0571L6.44781 11.3058L3.09848 13.0571C2.66849 13.282 2.16588 12.919 2.248 12.4428L2.88749 8.73562L0.177799 6.11142C-0.170112 5.77452 0.0214208 5.18718 0.501976 5.11734L4.24741 4.57302Z" fill="#FFC400"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                        <path d="M4.24741 4.57302L5.92225 1.19939C6.13722 0.766301 6.7584 0.766301 6.97337 1.19939L8.64819 4.57302L12.3937 5.11734C12.8742 5.18718 13.0657 5.77452 12.7179 6.11142L10.0081 8.73562L10.6476 12.4428C10.7297 12.919 10.2271 13.282 9.79713 13.0571L6.44781 11.3058L3.09848 13.0571C2.66849 13.282 2.16588 12.919 2.248 12.4428L2.88749 8.73562L0.177799 6.11142C-0.170112 5.77452 0.0214208 5.18718 0.501976 5.11734L4.24741 4.57302Z" fill="#FFC400"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                        <path d="M4.24741 4.57302L5.92225 1.19939C6.13722 0.766301 6.7584 0.766301 6.97337 1.19939L8.64819 4.57302L12.3937 5.11734C12.8742 5.18718 13.0657 5.77452 12.7179 6.11142L10.0081 8.73562L10.6476 12.4428C10.7297 12.919 10.2271 13.282 9.79713 13.0571L6.44781 11.3058L3.09848 13.0571C2.66849 13.282 2.16588 12.919 2.248 12.4428L2.88749 8.73562L0.177799 6.11142C-0.170112 5.77452 0.0214208 5.18718 0.501976 5.11734L4.24741 4.57302Z" fill="#FFC400"/>
                                    </svg>
                                    <h3 class="font-sans text-xs font-normal text-gray-400">1 week ago</h3>
                                </div>
                                <div class="flex items-center gap-2">
                                    <div class="flex items-center self-center w-6 h-6 rounded-full bg-gray-400"></div>
                                    <h3 class="font-sans font-medium text-xs text-black">Maulana</h3>
                                </div>
                                <h3 class="font-sans font-medium text-xs text-black">nice</h3>
                                <div class="pb-3 flex flex-row items-start justify-between w-[502px] border-b border-gray-400">
                                    <div class="flex w-36 items-center justify-between">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="12" viewBox="0 0 11 12" fill="none">
                                            <path d="M8.14295 10.7575H1.33038C1.14791 10.7575 1 10.6096 1 10.4271V5.03099C1 4.84853 1.14791 4.70061 1.33038 4.70061H2.8543C3.24113 4.70061 3.5996 4.49765 3.79862 4.16595L5.29104 1.67856C5.6131 1.14184 6.37159 1.09082 6.76259 1.57958C6.94688 1.80996 7.00629 2.11616 6.9215 2.39875L6.35854 4.2753C6.29494 4.48728 6.45369 4.70061 6.67498 4.70061H9.19416C9.92027 4.70061 10.4477 5.3911 10.2566 6.0916L9.20539 9.94599C9.07472 10.4251 8.63956 10.7575 8.14295 10.7575Z" stroke="black" stroke-linecap="round"/>
                                            <path d="M2.92712 10.7575V4.70062" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <h3 class="font-sans text-xs font-medium text-black">This review was helpful</h3>
                                    </div>
                                    <button type="button" class="flex w-20 justify-between items-center">
                                        <h3 class="font-sans text-xs font-medium text-black text-center">See reply</h3>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="8" viewBox="0 0 12 8" fill="none">
                                            <path d="M1.13538 1.70984L5.71571 6.29018L10.2961 1.70984" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="flex h-auto w-full flex-col items-start justify-between gap-1">
                                <div class="flex w-[149px] justify-between items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                        <path d="M4.24741 4.57302L5.92225 1.19939C6.13722 0.766301 6.7584 0.766301 6.97337 1.19939L8.64819 4.57302L12.3937 5.11734C12.8742 5.18718 13.0657 5.77452 12.7179 6.11142L10.0081 8.73562L10.6476 12.4428C10.7297 12.919 10.2271 13.282 9.79713 13.0571L6.44781 11.3058L3.09848 13.0571C2.66849 13.282 2.16588 12.919 2.248 12.4428L2.88749 8.73562L0.177799 6.11142C-0.170112 5.77452 0.0214208 5.18718 0.501976 5.11734L4.24741 4.57302Z" fill="#FFC400"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                        <path d="M4.24741 4.57302L5.92225 1.19939C6.13722 0.766301 6.7584 0.766301 6.97337 1.19939L8.64819 4.57302L12.3937 5.11734C12.8742 5.18718 13.0657 5.77452 12.7179 6.11142L10.0081 8.73562L10.6476 12.4428C10.7297 12.919 10.2271 13.282 9.79713 13.0571L6.44781 11.3058L3.09848 13.0571C2.66849 13.282 2.16588 12.919 2.248 12.4428L2.88749 8.73562L0.177799 6.11142C-0.170112 5.77452 0.0214208 5.18718 0.501976 5.11734L4.24741 4.57302Z" fill="#FFC400"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                        <path d="M4.24741 4.57302L5.92225 1.19939C6.13722 0.766301 6.7584 0.766301 6.97337 1.19939L8.64819 4.57302L12.3937 5.11734C12.8742 5.18718 13.0657 5.77452 12.7179 6.11142L10.0081 8.73562L10.6476 12.4428C10.7297 12.919 10.2271 13.282 9.79713 13.0571L6.44781 11.3058L3.09848 13.0571C2.66849 13.282 2.16588 12.919 2.248 12.4428L2.88749 8.73562L0.177799 6.11142C-0.170112 5.77452 0.0214208 5.18718 0.501976 5.11734L4.24741 4.57302Z" fill="#FFC400"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                        <path d="M4.24741 4.57302L5.92225 1.19939C6.13722 0.766301 6.7584 0.766301 6.97337 1.19939L8.64819 4.57302L12.3937 5.11734C12.8742 5.18718 13.0657 5.77452 12.7179 6.11142L10.0081 8.73562L10.6476 12.4428C10.7297 12.919 10.2271 13.282 9.79713 13.0571L6.44781 11.3058L3.09848 13.0571C2.66849 13.282 2.16588 12.919 2.248 12.4428L2.88749 8.73562L0.177799 6.11142C-0.170112 5.77452 0.0214208 5.18718 0.501976 5.11734L4.24741 4.57302Z" fill="#FFC400"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                        <path d="M4.24741 4.57302L5.92225 1.19939C6.13722 0.766301 6.7584 0.766301 6.97337 1.19939L8.64819 4.57302L12.3937 5.11734C12.8742 5.18718 13.0657 5.77452 12.7179 6.11142L10.0081 8.73562L10.6476 12.4428C10.7297 12.919 10.2271 13.282 9.79713 13.0571L6.44781 11.3058L3.09848 13.0571C2.66849 13.282 2.16588 12.919 2.248 12.4428L2.88749 8.73562L0.177799 6.11142C-0.170112 5.77452 0.0214208 5.18718 0.501976 5.11734L4.24741 4.57302Z" fill="#FFC400"/>
                                    </svg>
                                    <h3 class="font-sans text-xs font-normal text-gray-400">1 week ago</h3>
                                </div>
                                <div class="flex items-center gap-2">
                                    <div class="flex items-center self-center w-6 h-6 rounded-full bg-gray-400"></div>
                                    <h3 class="font-sans font-medium text-xs text-black">Maulana</h3>
                                </div>
                                <h3 class="font-sans font-medium text-xs text-black">nice</h3>
                                <div class="pb-3 flex flex-row items-start justify-between w-[502px] border-b border-gray-400">
                                    <div class="flex w-36 items-center justify-between">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="12" viewBox="0 0 11 12" fill="none">
                                            <path d="M8.14295 10.7575H1.33038C1.14791 10.7575 1 10.6096 1 10.4271V5.03099C1 4.84853 1.14791 4.70061 1.33038 4.70061H2.8543C3.24113 4.70061 3.5996 4.49765 3.79862 4.16595L5.29104 1.67856C5.6131 1.14184 6.37159 1.09082 6.76259 1.57958C6.94688 1.80996 7.00629 2.11616 6.9215 2.39875L6.35854 4.2753C6.29494 4.48728 6.45369 4.70061 6.67498 4.70061H9.19416C9.92027 4.70061 10.4477 5.3911 10.2566 6.0916L9.20539 9.94599C9.07472 10.4251 8.63956 10.7575 8.14295 10.7575Z" stroke="black" stroke-linecap="round"/>
                                            <path d="M2.92712 10.7575V4.70062" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <h3 class="font-sans text-xs font-medium text-black">This review was helpful</h3>
                                    </div>
                                    <button type="button" class="flex w-20 justify-between items-center">
                                        <h3 class="font-sans text-xs font-medium text-black text-center">See reply</h3>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="8" viewBox="0 0 12 8" fill="none">
                                            <path d="M1.13538 1.70984L5.71571 6.29018L10.2961 1.70984" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col w-full gap-6 p-6 bg-white rounded-lg">
                    <h3 class="font-sans text-xl font-bold">Featured Product</h3>
                    <div class="w-full grid grid-cols-2 gap-4">
                        <div class="bg-white w-full flex flex-col p-2 shadow-md rounded">
                            <h2 class="font-sans text-xl font-bold">Mobil 1</h2>
                            <h3 class="font-sans text-sm">Sedan</h3>
                            <img src="{{ asset('assets/item-product.png') }}" alt="" class="w-full h-auto my-2">
                            <div class="flex justify-between items-center">
                                <h3 class="font-sans text-xs font-medium">Rp. 500.000/day</h3>
                                <button class="flex py-1 px-2 justify-center items-center gap-1 text-xs rounded bg-blue-600 text-white">
                                    Rent
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 13 12" fill="none">
                                        <path d="M10.9111 6.11652L7.6174 9.41019C7.54873 9.47886 7.45559 9.51744 7.35848 9.51744C7.26137 9.51744 7.16823 9.47886 7.09956 9.41019C7.03089 9.34152 6.99231 9.24838 6.99231 9.15127C6.99231 9.05416 7.03089 8.96102 7.09956 8.89235L9.76881 6.22356H2.60095C2.50389 6.22356 2.41081 6.185 2.34217 6.11637C2.27354 6.04774 2.23499 5.95466 2.23499 5.8576C2.23499 5.76054 2.27354 5.66745 2.34217 5.59882C2.41081 5.53019 2.50389 5.49163 2.60095 5.49163H9.76881L7.09956 2.82284C7.03089 2.75417 6.99231 2.66103 6.99231 2.56392C6.99231 2.46681 7.03089 2.37367 7.09956 2.305C7.16823 2.23633 7.26137 2.19775 7.35848 2.19775C7.45559 2.19775 7.54873 2.23633 7.6174 2.305L10.9111 5.59868C10.9451 5.63266 10.9721 5.67303 10.9905 5.71745C11.0089 5.76188 11.0184 5.8095 11.0184 5.8576C11.0184 5.90569 11.0089 5.95331 10.9905 5.99774C10.9721 6.04217 10.9451 6.08253 10.9111 6.11652Z" fill="white"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="bg-white w-full flex flex-col p-2 shadow-md rounded">
                            <h2 class="font-sans text-xl font-bold">Mobil 1</h2>
                            <h3 class="font-sans text-sm">Sedan</h3>
                            <img src="{{ asset('assets/item-product.png') }}" alt="" class="w-full h-auto my-2">
                            <div class="flex justify-between items-center">
                                <h3 class="font-sans text-xs font-medium">Rp. 500.000/day</h3>
                                <button class="flex py-1 px-2 justify-center items-center gap-1 text-xs rounded bg-blue-600 text-white">
                                    Rent
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 13 12" fill="none">
                                        <path d="M10.9111 6.11652L7.6174 9.41019C7.54873 9.47886 7.45559 9.51744 7.35848 9.51744C7.26137 9.51744 7.16823 9.47886 7.09956 9.41019C7.03089 9.34152 6.99231 9.24838 6.99231 9.15127C6.99231 9.05416 7.03089 8.96102 7.09956 8.89235L9.76881 6.22356H2.60095C2.50389 6.22356 2.41081 6.185 2.34217 6.11637C2.27354 6.04774 2.23499 5.95466 2.23499 5.8576C2.23499 5.76054 2.27354 5.66745 2.34217 5.59882C2.41081 5.53019 2.50389 5.49163 2.60095 5.49163H9.76881L7.09956 2.82284C7.03089 2.75417 6.99231 2.66103 6.99231 2.56392C6.99231 2.46681 7.03089 2.37367 7.09956 2.305C7.16823 2.23633 7.26137 2.19775 7.35848 2.19775C7.45559 2.19775 7.54873 2.23633 7.6174 2.305L10.9111 5.59868C10.9451 5.63266 10.9721 5.67303 10.9905 5.71745C11.0089 5.76188 11.0184 5.8095 11.0184 5.8576C11.0184 5.90569 11.0089 5.95331 10.9905 5.99774C10.9721 6.04217 10.9451 6.08253 10.9111 6.11652Z" fill="white"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="bg-white w-full flex flex-col p-2 shadow-md rounded">
                            <h2 class="font-sans text-xl font-bold">Mobil 1</h2>
                            <h3 class="font-sans text-sm">Sedan</h3>
                            <img src="{{ asset('assets/item-product.png') }}" alt="" class="w-full h-auto my-2">
                            <div class="flex justify-between items-center">
                                <h3 class="font-sans text-xs font-medium">Rp. 500.000/day</h3>
                                <button class="flex py-1 px-2 justify-center items-center gap-1 text-xs rounded bg-blue-600 text-white">
                                    Rent
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 13 12" fill="none">
                                        <path d="M10.9111 6.11652L7.6174 9.41019C7.54873 9.47886 7.45559 9.51744 7.35848 9.51744C7.26137 9.51744 7.16823 9.47886 7.09956 9.41019C7.03089 9.34152 6.99231 9.24838 6.99231 9.15127C6.99231 9.05416 7.03089 8.96102 7.09956 8.89235L9.76881 6.22356H2.60095C2.50389 6.22356 2.41081 6.185 2.34217 6.11637C2.27354 6.04774 2.23499 5.95466 2.23499 5.8576C2.23499 5.76054 2.27354 5.66745 2.34217 5.59882C2.41081 5.53019 2.50389 5.49163 2.60095 5.49163H9.76881L7.09956 2.82284C7.03089 2.75417 6.99231 2.66103 6.99231 2.56392C6.99231 2.46681 7.03089 2.37367 7.09956 2.305C7.16823 2.23633 7.26137 2.19775 7.35848 2.19775C7.45559 2.19775 7.54873 2.23633 7.6174 2.305L10.9111 5.59868C10.9451 5.63266 10.9721 5.67303 10.9905 5.71745C11.0089 5.76188 11.0184 5.8095 11.0184 5.8576C11.0184 5.90569 11.0089 5.95331 10.9905 5.99774C10.9721 6.04217 10.9451 6.08253 10.9111 6.11652Z" fill="white"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="bg-white w-full flex flex-col p-2 shadow-md rounded">
                            <h2 class="font-sans text-xl font-bold">Mobil 1</h2>
                            <h3 class="font-sans text-sm">Sedan</h3>
                            <img src="{{ asset('assets/item-product.png') }}" alt="" class="w-full h-auto my-2">
                            <div class="flex justify-between items-center">
                                <h3 class="font-sans text-xs font-medium">Rp. 500.000/day</h3>
                                <button class="flex py-1 px-2 justify-center items-center gap-1 text-xs rounded bg-blue-600 text-white">
                                    Rent
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 13 12" fill="none">
                                        <path d="M10.9111 6.11652L7.6174 9.41019C7.54873 9.47886 7.45559 9.51744 7.35848 9.51744C7.26137 9.51744 7.16823 9.47886 7.09956 9.41019C7.03089 9.34152 6.99231 9.24838 6.99231 9.15127C6.99231 9.05416 7.03089 8.96102 7.09956 8.89235L9.76881 6.22356H2.60095C2.50389 6.22356 2.41081 6.185 2.34217 6.11637C2.27354 6.04774 2.23499 5.95466 2.23499 5.8576C2.23499 5.76054 2.27354 5.66745 2.34217 5.59882C2.41081 5.53019 2.50389 5.49163 2.60095 5.49163H9.76881L7.09956 2.82284C7.03089 2.75417 6.99231 2.66103 6.99231 2.56392C6.99231 2.46681 7.03089 2.37367 7.09956 2.305C7.16823 2.23633 7.26137 2.19775 7.35848 2.19775C7.45559 2.19775 7.54873 2.23633 7.6174 2.305L10.9111 5.59868C10.9451 5.63266 10.9721 5.67303 10.9905 5.71745C11.0089 5.76188 11.0184 5.8095 11.0184 5.8576C11.0184 5.90569 11.0089 5.95331 10.9905 5.99774C10.9721 6.04217 10.9451 6.08253 10.9111 6.11652Z" fill="white"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="bg-white w-full flex flex-col p-2 shadow-md rounded">
                            <h2 class="font-sans text-xl font-bold">Mobil 1</h2>
                            <h3 class="font-sans text-sm">Sedan</h3>
                            <img src="{{ asset('assets/item-product.png') }}" alt="" class="w-full h-auto my-2">
                            <div class="flex justify-between items-center">
                                <h3 class="font-sans text-xs font-medium">Rp. 500.000/day</h3>
                                <button class="flex py-1 px-2 justify-center items-center gap-1 text-xs rounded bg-blue-600 text-white">
                                    Rent
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 13 12" fill="none">
                                        <path d="M10.9111 6.11652L7.6174 9.41019C7.54873 9.47886 7.45559 9.51744 7.35848 9.51744C7.26137 9.51744 7.16823 9.47886 7.09956 9.41019C7.03089 9.34152 6.99231 9.24838 6.99231 9.15127C6.99231 9.05416 7.03089 8.96102 7.09956 8.89235L9.76881 6.22356H2.60095C2.50389 6.22356 2.41081 6.185 2.34217 6.11637C2.27354 6.04774 2.23499 5.95466 2.23499 5.8576C2.23499 5.76054 2.27354 5.66745 2.34217 5.59882C2.41081 5.53019 2.50389 5.49163 2.60095 5.49163H9.76881L7.09956 2.82284C7.03089 2.75417 6.99231 2.66103 6.99231 2.56392C6.99231 2.46681 7.03089 2.37367 7.09956 2.305C7.16823 2.23633 7.26137 2.19775 7.35848 2.19775C7.45559 2.19775 7.54873 2.23633 7.6174 2.305L10.9111 5.59868C10.9451 5.63266 10.9721 5.67303 10.9905 5.71745C11.0089 5.76188 11.0184 5.8095 11.0184 5.8576C11.0184 5.90569 11.0089 5.95331 10.9905 5.99774C10.9721 6.04217 10.9451 6.08253 10.9111 6.11652Z" fill="white"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="bg-white w-full flex flex-col p-2 shadow-md rounded">
                            <h2 class="font-sans text-xl font-bold">Mobil 1</h2>
                            <h3 class="font-sans text-sm">Sedan</h3>
                            <img src="{{ asset('assets/item-product.png') }}" alt="" class="w-full h-auto my-2">
                            <div class="flex justify-between items-center">
                                <h3 class="font-sans text-xs font-medium">Rp. 500.000/day</h3>
                                <button class="flex py-1 px-2 justify-center items-center gap-1 text-xs rounded bg-blue-600 text-white">
                                    Rent
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 13 12" fill="none">
                                        <path d="M10.9111 6.11652L7.6174 9.41019C7.54873 9.47886 7.45559 9.51744 7.35848 9.51744C7.26137 9.51744 7.16823 9.47886 7.09956 9.41019C7.03089 9.34152 6.99231 9.24838 6.99231 9.15127C6.99231 9.05416 7.03089 8.96102 7.09956 8.89235L9.76881 6.22356H2.60095C2.50389 6.22356 2.41081 6.185 2.34217 6.11637C2.27354 6.04774 2.23499 5.95466 2.23499 5.8576C2.23499 5.76054 2.27354 5.66745 2.34217 5.59882C2.41081 5.53019 2.50389 5.49163 2.60095 5.49163H9.76881L7.09956 2.82284C7.03089 2.75417 6.99231 2.66103 6.99231 2.56392C6.99231 2.46681 7.03089 2.37367 7.09956 2.305C7.16823 2.23633 7.26137 2.19775 7.35848 2.19775C7.45559 2.19775 7.54873 2.23633 7.6174 2.305L10.9111 5.59868C10.9451 5.63266 10.9721 5.67303 10.9905 5.71745C11.0089 5.76188 11.0184 5.8095 11.0184 5.8576C11.0184 5.90569 11.0089 5.95331 10.9905 5.99774C10.9721 6.04217 10.9451 6.08253 10.9111 6.11652Z" fill="white"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
        const loveIcon = document.getElementById('favDetailProduct');

        let isFilled = false;

        loveIcon.addEventListener('click', function() {
            isFilled = !isFilled;

            if (isFilled) {
                loveIcon.style.fill = 'none';
            } else {
                loveIcon.style.fill = '#FF0000';
            }
        });
    });
    </script>
@endsection
