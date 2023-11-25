@extends('user.layout.main', ['page' => 'User Profile'])

@section('title', 'User Profile')

@section('content')
<div>
    <div class="w-full h-full px-32 py-4">
        <div class="flex flex-col pt-7 gap-10">
            <h1 class="font-bold text-6xl">My Order</h1>
            <div class="flex gap-5">
                <div class="w-2/5 flex flex-col border border-gray-400 rounded-3xl p-6 gap-4">
                    <img src="/assets/hanif.jpeg" alt="" class="w-52 h-52 object-cover rounded-full mx-auto">
                    <div class="mx-auto flex flex-col gap-1">
                        <h1 class="text-2xl font-bold text-center">{{ $user->name }}</h1>
                        <h2 class="text-base text-gray-800 text-center">muhammadbdjafar@gmail.com</h2>
                    </div>
                    <hr class="border border-gray-300">
                    <div class="flex flex-col">
                        <a href="" class="flex items-center gap-3 px-4 py-2 hover:bg-gray-100">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 40 41" fill="none">
                                <path d="M16.6667 32.6141V24.2808H23.3333V32.6141C23.3333 33.5308 24.0833 34.2808 25 34.2808H30C30.9167 34.2808 31.6667 33.5308 31.6667 32.6141V20.9475H34.5C35.2667 20.9475 35.6333 19.9975 35.05 19.4975L21.1167 6.94746C20.4833 6.38079 19.5167 6.38079 18.8833 6.94746L4.95001 19.4975C4.38334 19.9975 4.73334 20.9475 5.50001 20.9475H8.33334V32.6141C8.33334 33.5308 9.08334 34.2808 10 34.2808H15C15.9167 34.2808 16.6667 33.5308 16.6667 32.6141Z" fill="black"/>
                            </svg>
                            <p>Dashboard</p>
                        </a>
                        <a href="" class="flex items-center gap-3 px-4 py-2 hover:bg-gray-100"">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 40 41" fill="none">
                                <path d="M30 10.9474H26.6667C26.6667 7.26409 23.6834 4.28076 20 4.28076C16.3167 4.28076 13.3334 7.26409 13.3334 10.9474H10C8.16669 10.9474 6.66669 12.4474 6.66669 14.2808V34.2808C6.66669 36.1141 8.16669 37.6141 10 37.6141H30C31.8334 37.6141 33.3334 36.1141 33.3334 34.2808V14.2808C33.3334 12.4474 31.8334 10.9474 30 10.9474ZM16.6667 17.6141C16.6667 18.5308 15.9167 19.2808 15 19.2808C14.0834 19.2808 13.3334 18.5308 13.3334 17.6141V14.2808H16.6667V17.6141ZM20 7.61409C21.8334 7.61409 23.3334 9.11409 23.3334 10.9474H16.6667C16.6667 9.11409 18.1667 7.61409 20 7.61409ZM26.6667 17.6141C26.6667 18.5308 25.9167 19.2808 25 19.2808C24.0834 19.2808 23.3334 18.5308 23.3334 17.6141V14.2808H26.6667V17.6141Z" fill="black"/>
                            </svg>
                            <p>My Order</p>
                        </a>
                        <a href="" class="flex items-center gap-3 px-4 py-2 hover:bg-gray-100"">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 40 41" fill="none">
                                <path d="M20.199 36.2C20.199 36.6774 20.0094 37.1352 19.6719 37.4728C19.3343 37.8104 18.8765 38 18.3992 38H9.99978C9.20419 38 8.44118 37.6839 7.87862 37.1213C7.31605 36.5587 7 35.7957 7 35V11C7 10.2044 7.31605 9.44129 7.87862 8.87868C8.44118 8.31607 9.20419 8 9.99978 8H18.3992C18.8765 8 19.3343 8.18964 19.6719 8.52721C20.0094 8.86477 20.199 9.32261 20.199 9.8C20.199 10.2774 20.0094 10.7352 19.6719 11.0728C19.3343 11.4104 18.8765 11.6 18.3992 11.6H10.5997V34.4H18.3992C18.8765 34.4 19.3343 34.5896 19.6719 34.9272C20.0094 35.2648 20.199 35.7226 20.199 36.2ZM36.4714 21.7265L30.4718 15.7265C30.1337 15.3883 29.6751 15.1984 29.1969 15.1984C28.7187 15.1984 28.2601 15.3883 27.922 15.7265C27.5839 16.0647 27.3939 16.5233 27.3939 17.0015C27.3939 17.4797 27.5839 17.9383 27.922 18.2765L30.8483 21.2H18.3992C17.9218 21.2 17.464 21.3896 17.1265 21.7272C16.7889 22.0648 16.5993 22.5226 16.5993 23C16.5993 23.4774 16.7889 23.9352 17.1265 24.2728C17.464 24.6104 17.9218 24.8 18.3992 24.8H30.8483L27.9205 27.7265C27.5824 28.0647 27.3924 28.5233 27.3924 29.0015C27.3924 29.4797 27.5824 29.9383 27.9205 30.2765C28.2586 30.6147 28.7172 30.8046 29.1954 30.8046C29.6736 30.8046 30.1322 30.6147 30.4703 30.2765L36.4699 24.2765C36.6378 24.1094 36.771 23.9107 36.862 23.692C36.953 23.4733 36.9999 23.2387 37 23.0018C37.0001 22.7649 36.9535 22.5303 36.8628 22.3115C36.7721 22.0926 36.6391 21.8938 36.4714 21.7265Z" fill="black"/>
                            </svg>
                            <p>Logout</p>
                        </a>
                    </div>
                </div>
                <div class="flex flex-col items-start w-full h-fit border rounded-3xl border-gray-400 p-6 gap-6">
                    <h2 class="font-bold text-4xl">Order Details</h2>
                    <table class="table-fixed w-full">
                        <thead>
                            <tr>
                                <th>Booking No</th>
                                <th>Vehicle</th>
                                <th>Pick Up Location</th>
                                <th>Date</th>
                                <th>Return Date</th>
                                <th>Payment</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <td>
                                    <p class="py-1 px-3 bg-gray-300 text-gray-600 rounded-full w-fit mx-auto">0001</p>
                                </td>
                                <td>Toyota Avanza</td>
                                <td>MT Haryono, Malang</td>
                                <td>6/11/2023</td>
                                <td>12/11/2023</td>
                                <td>Rp. 5.000.000</td>
                                <td>
                                    <p class="py-1 px-3 bg-yellow-300 text-yellow-700 rounded-full w-fit mx-auto">Booked</p>
                                </td>
                            </tr>
                            <tr class="text-center">
                                <td>
                                    <p class="py-1 px-3 bg-gray-300 text-gray-600 rounded-full w-fit mx-auto">0002</p>
                                </td>
                                <td>Toyota Avanza</td>
                                <td>MT Haryono, Malang</td>
                                <td>6/11/2023</td>
                                <td>12/11/2023</td>
                                <td>Rp. 5.000.000</td>
                                <td>
                                    <p class="py-1 px-3 bg-green-400 text-green-800 rounded-full w-fit mx-auto">Completed</p>
                                </td>
                            </tr>
                            <tr class="text-center">
                                <td>
                                    <p class="py-1 px-3 bg-gray-300 text-gray-600 rounded-full w-fit mx-auto">0003</p>
                                </td>
                                <td>Toyota Avanza</td>
                                <td>MT Haryono, Malang</td>
                                <td>6/11/2023</td>
                                <td>12/11/2023</td>
                                <td>Rp. 5.000.000</td>
                                <td>
                                    <p class="py-1 px-3 bg-red-400 text-red-800 rounded-full w-fit mx-auto">Canceled</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
