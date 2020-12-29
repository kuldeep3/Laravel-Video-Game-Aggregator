@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Popular Games</h2>
        <div class="popular-games text-sm grid grid-cols-6 gap-12 border-b border-gray-800 pb-16">
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/images/fantasy.png" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right: -20px; bottom: -20px;">
                        <div class="font-semibold text-xs flex justify-center items-center h-full" >80%</div>
                    </div>
                    <a href="#" class="block text-base font-semibold leading-tight hover:gray-400 mt-8">Final Fantasy VII Remake</a>
                    <div class="text-gray-400 mt-1">Playstation</div>
                </div>
            </div>
        </div>
        <div class="flex my-18">
            <div class="recently-reviewed w-3/4 mr-32">
                <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Recently Reviewed</h2>
                <div class="recently-reviewed-container space-y-12 mt-8">
                    <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
                        <div class="relative flex-none">
                            <a href="#">
                                <img src="/images/fantasy.png" alt="game cover" class=" w-48 hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                            <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full" style="right: -20px; bottom: -20px;">
                                <div class="font-semibold text-xs flex justify-center items-center h-full" >80%</div>
                            </div>
                            <a href="#" class="block text-base font-semibold leading-tight hover:gray-400 mt-8">Final Fantasy VII Remake</a>
                            <div class="text-gray-400 mt-1">Playstation</div>
                        </div>
                        <div class="ml-12">
                            <a href="#" class="block text-base font-semibold leading-tight hover:gray-400 mt-4">Final Fantasy VII Remake</a>
                            <div class="text-gray-400 mt-1">Playstation 4</div>
                            <p class="mt-6 text-gray-400">The world has fallen under the control of the Shinra Electric Power Company, a shadowy corporation controlling the planet’s very life force as mako energy. In the sprawling city of Midgar, an anti-Shinra organization calling themselves Avalanche have stepped up their resistance. Cloud Strife, a former member of Shinra’s elite SOLDIER unit now turned mercenary, lends his aid to the group, unaware of the epic consequences that await him. The story of this first, standalone game in the FINAL FANTASY VII REMAKE project covers up to the party’s escape from Midgar, and goes deeper into the events occurring in Midgar than the original FINAL FANTASY VII.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="recently-reviewed w-1/4 mr-32">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur quibusdam quae dicta, perspiciatis illum explicabo dolore alias asperiores molestias, iusto eaque, minima accusamus dolorem quia optio distinctio nostrum beatae iure dolor natus. Ipsum atque ullam expedita facilis iste recusandae voluptas, placeat nesciunt quidem eaque harum vero nisi aperiam velit odio.</div>
        </div>
    </div>
@endsection