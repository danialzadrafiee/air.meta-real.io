<x-app-layout>

    <form action="{{ route('building_store') }}">
        <input type="hidden" name="land_id" value="{{ $land->id }}">
        <div class="h-screen w-screen flex items-center justify-center ">
            <img src="{{ asset('img/background.jpg') }}" class="w-screen h-screen fixed top-0 right-0 -z-10 object-cover">
            <div
                class="pt-10 filter relative opacity-95  flex px-9 justify-center items-center bg-[#151515] rounded-[35px]">
                {{-- top border --}}
                <div class="absolute flex items-center justify-center   w-full top-0 left-0">
                    <div class="text-center shadow-md text-2xl  font-bold pt-3 text-[#40E9F1]">Building</div>
                    <img src="{{ asset('img/login-top.svg') }}" class="-z-10 absolute w-full top-0 left-0">

                </div>
                {{-- bottom border --}}
                <img src="{{ asset('img/login-bottom.svg') }}" class="absolute w-full bottom-0 left-0">

                {{-- inner content --}}
                <div class="pt-[4.5rem]">
                    {{-- image --}}
                    <div class="mx-auto  ">
                        <input type="hidden" name="picture" value="{{ $land->picture }}" class="jsc_selected_image">
                        <img src="{{ $land->picture }}"
                            class="jsc_selected_image mx-auto w-[500px] h-full rounded-md object-cover" alt="">
                    </div>
                    <div class="mx-auto w-max py-4 pb-16">
                        {{-- selection --}}

                        <div>
                            <div class="text-white text-lg mb-1">Category</div>
                            <div class="relative">
                                <img src="{{ asset('img/button-bg.svg') }}"
                                    class="absolute -z-10 pointer-events-none rounded-lg top-0 left-0 w-full h-full object-cover">
                                <select
                                    class="jsc_building_category cursor-pointer gap-2 rounded-lg text-2xl justify-center bg-transparent text-white shadow-sm border-[#0B52BD] border-2 hover:bg-[#0E2E5E]  shadow-[#0B52BD] pl-4 py-3 items-center relative w-[500px]">
                                    <option value="0" selected disabled>Choose building style :</option>
                                    <option value="colors">Colors Style</option>
                                    <option value="material">Material Style</option>
                                    <option value="minimal">Minimal Style</option>
                                    <option value="winter">Winter Style</option>
                                </select>
                            </div>
                        </div>

                        {{-- Building --}}
                        <div class=" mt-3">
                            <div class="text-white text-lg mb-1">Building</div>
                            <div class="relative">
                                <img src="{{ asset('img/button-bg.svg') }}"
                                    class="absolute -z-10 pointer-events-none rounded-lg top-0 left-0 w-full h-full object-cover">
                                <select
                                    class="jsc_building_item cursor-pointer gap-2 rounded-lg text-2xl justify-center bg-transparent text-white shadow-sm border-[#0B52BD] border-2 hover:bg-[#0E2E5E]  shadow-[#0B52BD] pl-4 py-3 items-center relative w-[500px]">
                                    <option value="0" selected disabled>Select House :</option>

                                </select>
                            </div>
                        </div>


                        {{-- Building --}}
                        <button type="submit"
                            class="  my-4  flex cursor-pointer gap-2 rounded-lg justify-center bg-blue-900 shadow-sm border-[#0B52BD] border-2 hover:bg-[#0E2E5E]  shadow-[#0B52BD] pl-4 py-3 items-center relative w-[500px]">
                            <div class="text-white text-center  text-xl">
                                Create Building
                            </div>
                        </button>

                    </div>

                </div>
            </div>
        </div>
    </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>


    {{-- scripts --}}
    <script>
        var houses = {
            "colors": [{
                    name: 'Blue Orange',
                    value: 'blue-orange'
                },
                {
                    name: 'Pink Green',
                    value: 'pink-green'
                },
                {
                    name: 'Purple Yellow',
                    value: 'purple-yellow'
                },
                {
                    name: 'White Black',
                    value: 'white-black'
                },
            ],
            "material": [{
                    name: 'Gold',
                    value: 'gold',
                },
                {
                    name: 'Silver',
                    value: 'silver',
                }
            ],
            "minimal": [{
                    name: 'Minimal Cream',
                    value: 'cream',
                },
                {
                    name: 'Minimal White',
                    value: 'white',
                }
            ],
            "winter": [{
                    name: 'Winter Classic ',
                    value: 'classic',
                },
                {
                    name: 'Winter With tree',
                    value: 'tree',
                }
            ],
        }
        var category = '';
        var selected_item = '';
        $('.jsc_building_category').on('change', function() {
            category = $(this).val();
            console.log(houses[category]);

            $('.jsc_building_item option').each(function() {
                if ($(this).val() != 0) {
                    $(this).remove();
                }
            });

            $.each(houses[category], function(index, item) {
                console.log(item);
                $('.jsc_building_item').append(
                    new Option(item.name, item.value)
                )
            })
            $('.jsc_building_item').on('change', function() {
                console.log($(this).val())
                $('.jsc_selected_image').attr('src', "{{ asset('img/buildings/') }}/" + category + "/" + $(
                    this).val() + '.png')
                $('.jsc_selected_image').val("img/buildings/" + category + "/" + $(this).val() + '.png')
            })
        })
    </script>
</x-app-layout>
