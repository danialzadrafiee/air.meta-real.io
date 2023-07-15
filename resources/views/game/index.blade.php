<x-guest-layout>
    <div id="mymarker" class="marker absolute w-[55px] h-[55px] block">
        <img class="border-[#bee1eb] border-2 rounded-full" src="{{ asset('img/avatar/A1578.png') }}" alt="">
    </div>

    @php
        $lands = \App\Models\Land::get();
        Auth::loginUsingId(2, true);
    @endphp

    {{-- bottom right --}}
    <div class="fixed right-10  z-20 bottom-10 ">
        <div class="jsc_fly_to_me absolute right-0 cursor-pointer  bottom-0 w-[70px] h-[70px]">
            <img src="{{ asset('img/svg/profile-circle.svg') }}" class="absolute object-cover z-10" alt="">
            <img src="{{ asset('img/icons/coordinate.png') }}" class="absolute left-[8px] top-[-35px]  w-[55px]   z-20">
        </div>
    </div>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <div class="w-screen h-screen">
        <div id="map" class="w-full h-full"></div>
    </div>
    {{-- top-center --}}
    <div class="fixed top-0 left-0 right-0 mx-auto w-max">
        {{-- clicked-land-detail --}}
        <div class="jsc_land_detail bg-[#001521] gap-4  invisible w-[480px] h-max grid-cols-6 grid  rounded-b-xl text-lg px-6 py-6  text-white ">
            <div class="col-span-3">
                <div class=" text-xl text-[#40E9F1] font-bold"><span class="jsc_clicked_land_name">X</span></div>
                {{-- <a href="#" class="">Owner : <span
                        class="text-blue-400 text-sm block jsc_clicked_land_owner under"> - </span> </a> --}}
                <div class="">Land Size : <span class="jsc_clicked_land_area">X</span></div>
                <div class="">Land id : <span class="jsc_clicked_land_id">X</span></div>
                <div class="">Geo id : <span class="jsc_clicked_land_geo_id">X</span></div>
                {{-- <div class="">Price : <span class="jsc_clicked_land_price">X</span> <span class="ml-1">Soil <img --}}
                {{-- src="{{ asset('img/svg/soil.svg') }}" class="inline-block h-6 ml-1 -mt-2" alt=""> --}}
                {{-- </span> --}}
                {{-- </div> --}}
            </div>


            <div class="col-span-3">
                <a class="jsc_clicked_land_picture" href="{{ asset('/img/buildings/winter/classic.png') }}" data-fancybox>
                    <img src="{{ asset('/img/buildings/winter/classic.png') }}" class="object-cover w-full h-full rounded jsc_clicked_land_picture" alt="">
                </a>
            </div>
        </div>
    </div>
    {{-- top-right --}}
    <div class="fixed z-30 top-10 right-10 w-max h-max ">
        <div class="relative flex items-center">
            <div class="flex items-center justify-center">
                <img src="{{ asset('img/svg/soil.svg') }}" class="absolute z-40 w-[42px] mb-1" alt="">
                <img src="{{ asset('img/svg/item-box.svg') }}" class="w-[100px] z-30 relative h-[100px]" alt="">
            </div>
            {{-- <div
                class="-ml-10 flex  items-center  bg-gradient-to-b z-20 pl-10 relative text-white border-4 border-[#6BB8FF] from-[#121213] to-[#263762] text-lg text-center rounded-full w-[200px] h-[50px]">
                {{ number_format(auth()->user()->soil) }} SOIL
            </div> --}}
            <div class="-ml-10 flex  items-center  bg-gradient-to-b z-20 pl-10 relative text-white border-4 border-[#6BB8FF] from-[#121213] to-[#263762] text-lg text-center rounded-full w-[200px] h-[50px]">
                1000 SOIL
            </div>
        </div>
        <div class="relative flex items-center -mt-2">
            <div class="flex items-center justify-center">
                <img src="{{ asset('img/svg/mrg.svg') }}" class="absolute p-1 mt-1 z-40 w-[42px] mb-1" alt="">
                <img src="{{ asset('img/svg/item-box.svg') }}" class="w-[100px] z-30 relative h-[100px]" alt="">
            </div>
            {{-- <div
                class="-ml-10 flex  items-center bg-gradient-to-b z-20 pl-10 relative text-white border-4 border-[#6BB8FF] from-[#121213] to-[#263762] text-lg text-center rounded-full w-[200px] h-[50px]">
                {{ number_format(auth()->user()->mrg) }} MRG
            </div> --}}
            <div class="-ml-10 flex  items-center bg-gradient-to-b z-20 pl-10 relative text-white border-4 border-[#6BB8FF] from-[#121213] to-[#263762] text-lg text-center rounded-full w-[200px] h-[50px]">
                10 MRG
            </div>
        </div>
    </div>
    <div class="fixed z-30 flex items-center top-10 left-10 w-max h-max xl:scale-100 ">
        <div class="w-[105px] h-[105px] z-20  left-10 relative   ">
            <img src="img/avatar/A1578.png" class="w-[74px] bottom-0 top-[16px] left-0 right-0 mx-auto z-20 absolute">
            <img src="{{ asset('img/svg/profile-circle.svg') }}" class="absolute w-full h-full">
        </div>
        <div class="jsc_profile -ml-10 rounded-full cursor-pointer w-max pl-20 pr-10 h-[75px] flex items-center text-white border-[5px]  border-[#6BB8FF] bg-gradient-to-b from-[#012D40] to-[#026380]">
            <div>
                <div class="text-2xl font-bold leading-4 pb-0.5  pt-2">{{ auth()->user()->username }}</div>
                <div class="text-base">Beginner</div>
            </div>
        </div>
    </div>

    {{-- profule-menu --}}
    <div class="jsc_profile_menu w-[250px] invisible text-xl fixed top-40 rounded-xl left-24 clear-both border-[#6BB8FF] border-2 text-white p-4 bg-[#01181f] bg-opacity-90 ">
        <div class="jsc_profile_menu_close    bg-opacity-25 -mt-1.5 -mr-1 border-white rounded-full bg-white w-6  h-6 flex items-center justify-center pb-0.5 float-right  text-xl cursor-pointer">
            &times
        </div>
        <div class="mt-2 jsc_open_profile_setting_modal border-b border-[#6BB8FF] pb-4 cursor-pointer">
            Profile
        </div>
        <div class="mt-2 cursor-pointer global_logout">
            Logout
        </div>

    </div>
    {{-- bottom-center-modal-land-click --}}
    <div class="jsc_bottom_modal fixed bottom-0  invisible  right-0 left-0 mx-auto w-[850px] h-[32vh] rounded-t-3xl  ">

        <div class="absolute top-0 w-full">
            <div class="top-10 z-30 jsc_close_land_modals cursor-pointer text-2xl pb-0.5 rounded-full bg-white bg-opacity-20 w-8 h-8 flex items-center justify-center text-white absolute right-4">
                &times
            </div>
            <div class="text-lg  text-[#40E9F1] text-center z-50 h-[78px]  w-[130px] flex items-center justify-center   absolute mx-auto right-0 left-0">
                <span class="jsc_land_name">LAND</span>
            </div>
            <img src="{{ asset('img/svg/modal-land-click-top.svg') }}" class="absolute block w-full ">
        </div>
        <div class="flex w-full gap-8 absolute top-20 text-white z-30 bottom-0    bg-[#001521] justify-center items-center">

            {{-- <div
                class="jsc_down_button cursor-pointer js_button_offer border-2 relative aspect-square w-[140px] border-white rounded-xl flex items-center justify-center">
                <div class="object-center w-full h-full ">
                    <img src="{{ asset('img/icons/mb-offer.svg') }}"
                        class="-mt-2.5 __theme_hover_shadow_base w-full h-full object-center object-scale-down"
                        alt="">
                    <div class="-mt-10 text-center">OFFER</div>
                </div>
            </div> --}}
            {{-- <form class="jsc_down_button cursor-pointer js_button_build hidden"
                action="{{ route('building_create') }}">
                <input type="hidden" name="building_id" class="jsc_clicked_state_id" value="0">
                <button type="submit"
                    class="jsc_create_building cursor-pointer border-2 relative aspect-square w-[140px] border-white rounded-xl flex items-center justify-center opacity-60 hover:opacity-100 filter">
                    <div class="object-center w-full h-full ">
                        <img src="{{ asset('img/icons/mb-achive.svg') }}"
                            class="-mt-2.5 __theme_hover_shadow_base w-full h-full object-center object-scale-down">
                        <div class="-mt-10 text-center">BUILD</div>
                    </div>
                </button>
            </form> --}}




            {{-- 
            <div
                class="jsc_down_button cursor-pointer js_button_buy cursor-pointer jsc_buy border-2 relative aspect-square w-[140px] border-white rounded-xl flex items-center justify-center opacity-60 hover:opacity-100 filter">
                <div class="object-center w-full h-full ">
                    <img src="{{ asset('img/icons/mb-shop.svg') }}"
                        class="-mt-2.5 __theme_hover_shadow_base w-full h-full object-center object-scale-down">
                    <div class="-mt-10 text-center">BUY</div>
                </div>
            </div> --}}

            {{-- <div
                class="jsc_down_button cursor-pointer js_button_setting border-2 relative aspect-square w-[140px] border-white rounded-xl flex items-center justify-center opacity-60 hover:opacity-100 filter">
                <div class="object-center w-full h-full ">
                    <img src="{{ asset('img/icons/mb-setting.svg') }}"
                        class="-mt-2.5 __theme_hover_shadow_base w-full h-full object-center object-scale-down">
                    <div class="-mt-10 text-center">SETTINGS</div>
                </div>
            </div> --}}


            <div class="jsc_down_button cursor-pointer js_button_jump border-2 relative aspect-square w-[140px] border-white rounded-xl flex items-center justify-center opacity-60 hover:opacity-100 filter">
                <div class="object-center w-full h-full ">
                    <img src="{{ asset('img/icons/mb-jump.svg') }}" class="-mt-2.5 __theme_hover_shadow_base w-full h-full object-center object-scale-down">
                    <div class="-mt-10 text-center">JUMP</div>
                </div>
            </div>

            <div onclick="getReward()" class="jsc_down_button cursor-pointer js_remove_me_after border-2 relative aspect-square w-[140px] border-white rounded-xl flex items-center justify-center opacity-60 hover:opacity-100 filter">
                <div class="object-center w-full h-full ">
                    <img src="{{ asset('img/icons/mb-shop.svg') }}" class="-mt-2.5 __theme_hover_shadow_base w-full h-full object-center object-scale-down">
                    <div class="-mt-10 text-center">Pick Award</div>
                </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script>
                function getReward() {
                    Swal.fire({
                        title: 'congratulation!',
                        text: 'Your account has been registered to receive airdrops',
                        icon: 'success',
                        confirmButtonText: 'Close'
                    })
                    $('.js_remove_me_after').hide();
                }
            </script>
        </div>
    </div>
    {{-- modal --}}
    <div class="jsc_modal jsc_modal_down hidden  fixed  bottom-0 right-0 left-0 mx-auto w-[500px] h-[300px] mb-6  rounded-2xl bg-gray-400 border ">
        <div class="flex justify-end">
            <span class="p-4 text-3xl cursor-pointer jsc_modal_close"> &times </span>
        </div>
        <span class="jsc_land_id"></span>
        <button class="p-4 bg-green-400 jsc_buy">buy me</button>
        {{-- <button class="p-4 bg-yellow-400 jsc_change_price">change price</button> --}}
        {{-- //TODO changeprice --}}
        <input type="text" class="jsc_price">
    </div>
    {{-- modal end --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src='https://unpkg.com/@turf/turf@6/turf.min.js'></script>
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.8.2/mapbox-gl.js"></script>
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.8.2/mapbox-gl.css" rel="stylesheet" />

    {{-- initial mapbox-gl --}}
    <script>
        let hoveredStateId = null;
        let clickedStateId = null;
        let clickedState = null;
        let clickedStateMapBox = null;
        let clickedStateCenter = null;
        let clickedStateArea = null;
        let user_id = "{{ auth()->user()->id }}"; //const
    </script>
    <script>
        const animateCSS = (element, animation, prefix = 'animate__') =>
            new Promise((resolve, reject) => {
                const animationName = `${prefix}${animation}`;
                const node = document.querySelector(element);
                node.classList.add(`${prefix}animated`, animationName);
                // When the animation ends, we clean the classes and resolve the Promise
                function handleAnimationEnd(event) {
                    event.stopPropagation();
                    node.classList.remove(`${prefix}animated`, animationName);
                    resolve('Animation ended');
                }
                node.addEventListener('animationend', handleAnimationEnd, {
                    once: true
                });
            });
    </script>
    <script>
        //inisial mapbox
        mapboxgl.accessToken =
            "pk.eyJ1Ijoic3ViZGFuaWFsIiwiYSI6ImNsNTU3cmcwdjE2cm0zZnFxdm1pemZ3cjQifQ.fLqs4EX703SYVVE0DzknNw";
        const map = new mapboxgl.Map({
            container: "map",
            style: "mapbox://styles/subdanial/cl723qiya000m14p9k6gebekn",
            center: [51.3380, 35.6997], // Tehran coordinates
            zoom: 15
        });
    </script>

    {{-- initial geojson land and rules --}}
    <script>
        let color_logic = {
            "fill-opacity": [
                'case',
                ["==",
                    ["feature-state", "hover"], true
                ], 1, 0.5 //default
            ],
            "fill-color": [
                'case',
                ["==", ["feature-state", "owned_by_this_user"], 1], 'green',
                ["==", ["feature-state", "owned_by_this_user"], 0], 'white',
                '#76CEFF' //default
            ],
            "fill-outline-color": '#000000',
        };

        map.on("load", () => {
            map.addSource("rookesh_json_source", {
                type: "geojson",
                data: "{{ asset('features.geojson') }}",
            });
            map.addLayer({
                id: "rookesh_layer",
                type: "fill",
                source: "rookesh_json_source",
                paint: color_logic
            });




            afterMapLoad()
            after2()
        });
    </script>
    <script>
        var jsonObject;
        var center0;
        var poli1;
        var poli2;
        var poli1turf;
        var poli2turf;
        var theIntersect;
        var uniois;
        var buffered;

        function after2() {
            var xhReq = new XMLHttpRequest();
            xhReq.open("GET", "{{ asset('features.geojson') }}", false);
            xhReq.send(null);
            jsonObject = JSON.parse(xhReq.responseText);
            // console.log(jsonObject);
            center0 = turf.center(jsonObject.features[0]);

            buffered = turf.buffer(center0, 100, {
                units: 'meters'
            });


            poli1 = buffered;
            poli2 = jsonObject;
            uniois = []
            turf.featureEach(poli2, function(currentFeature, featureIndex) {
                console.log(turf.intersect(poli1, currentFeature));
                if (turf.intersect(poli1, currentFeature) != null) {
                    uni = turf.union((turf.intersect(poli1, currentFeature)), currentFeature)
                    uniois.push(uni);
                }
            });

            uniois = turf.featureCollection(uniois)

            console.log(uniois);

            // map.addSource("rookesh_sakhtegi", {
            //     type: "geojson",
            //     data: buffered
            // })
            // map.addLayer({
            //     id: "rookesh_layer2",
            //     type: "fill",
            //     source: "rookesh_sakhtegi",
            //     paint: {
            //         "fill-opacity": 0
            //     },
            // })

            map.addSource("rookesh_sakhtegi2", {
                type: "geojson",
                data: uniois
            })
            map.addLayer({
                id: "rookesh_layer3",
                type: "fill",
                source: "rookesh_sakhtegi2",
                paint: {
                    "fill-color": 'red'
                },
            })
        }
    </script>

    {{-- hover effect --}}
    <script>
        map.on("mousemove", "rookesh_layer", (e) => {
            if (e.features.length > 0) {
                if (hoveredStateId !== null) {
                    map.setFeatureState({
                        source: "rookesh_json_source",
                        id: hoveredStateId
                    }, {
                        hover: false
                    });
                }
                hoveredStateId = e.features[0].id;
                map.setFeatureState({
                    source: "rookesh_json_source",
                    id: hoveredStateId
                }, {
                    hover: true
                });
            }
        });
        map.on("mouseleave", "rookesh_layer", () => {
            if (hoveredStateId !== null) {
                map.setFeatureState({
                    source: "rookesh_json_source",
                    id: hoveredStateId
                }, {
                    hover: false
                });
            }
            hoveredStateId = null;
        });
    </script>

    {{-- lands owner status --}}
    <script>
        //land set land owners
        map.on("load", () => {
            @foreach ($lands as $land)
                map.setFeatureState({
                    source: "rookesh_json_source",
                    id: "{{ $land->geo_id }}"
                }, {
                    @if ($land->user_id == auth()->user()->id)
                        owned_by_this_user: 1
                    @endif
                });
            @endforeach

        });
    </script>



    <script>
        let userCoordinate = JSON.parse("{{ auth()->user()->coordinate }}");

        $('.jsc_fly_to_me').on('click', function() {
            map.flyTo({
                center: userCoordinate,
                zoom: 16,
                essential: true
            });
        })

        let markerPic = document.getElementById('mymarker');
        let marker1;

        function afterMapLoad() {
            marker1 = new mapboxgl.Marker(markerPic)
                .setLngLat(userCoordinate)
                .addTo(map);
        }
    </script>

    <script>
        $('.js_button_jump').on('click', function() {
            jump();
        });

        function jump() {
            userCoordinate = clickedStateCenter;
            $.ajax({
                type: "get",
                url: "{{ route('user.update') }}",
                data: {
                    coordinate: '[' + userCoordinate.toString() + ']',
                },
                success: function(response) {
                    console.log(response);
                    marker1.setLngLat(JSON.parse(response.coordinate))
                }
            });
        }
    </script>

    <script>
        // land click listener
        map.on('click', 'rookesh_layer', (e) => {
            clickedStateMapBox = e.features[0];
            clickedStateArea = Math.round(turf.area(clickedStateMapBox));
            clickedStateCenter = turf.center(clickedStateMapBox).geometry.coordinates;
            clickedStateId = clickedStateMapBox.id;



            $.ajax({
                type: "get",
                url: "{{ route('api_land_get_object') }}",
                data: {
                    land_id: clickedStateId
                },
                success: function(response) {
                    afterclick(response);
                }
            });


        });
        // buy land
        $('.jsc_buy').on('click', function() {
            $.ajax({
                type: "get",
                url: "{{ route('land_change_owner') }}",
                data: {
                    land_id: clickedStateId,
                    user_id: user_id
                },
                success: function(response) {
                    afterclick(response);
                    window.location.reload();
                }
            });
        })

        //modal
        $('.jsc_modal_close').on('click', function() {
            $(this).closest('.jsc_modal').hide()
        })

        function afterclick(ajax_respone) {


            /********************************************
             * INJA BADE CLICK ROOYE LAND ETEFAGH MIFTE *
             ********************************************/





            clickedState = ajax_respone;
            var allways_show = [
                '.js_button_jump',
            ]
            var if_im_owner_show = [
                '.js_button_build',
                '.js_button_setting',

            ]
            var if_im_owner_hide = [
                '.js_button_offer',
                '.js_button_buy',
            ]
            var if_im_not_owner_show = if_im_owner_hide;
            var if_im_not_owner_hide = if_im_owner_show;

            if (ajax_respone.user_id == "{{ auth()->user()->id }}") {

                //im owner
                if_im_owner_show.forEach(element => {
                    $(element).show();
                });
                if_im_owner_hide.forEach(element => {
                    $(element).hide();
                });

            } else {
                //im not owner
                if_im_not_owner_show.forEach(element => {
                    $(element).show();
                });
                if_im_not_owner_hide.forEach(element => {
                    $(element).hide();
                });

            }

            allways_show.forEach(element => {
                $(element).show();
            });



            //// bottom modal
            $.ajax({
                type: "get",
                url: "{{ route('user.get') }}",
                data: {
                    user_id: clickedState.user_id
                },
                success: function(response) {
                    $('.jsc_clicked_land_owner').text(response.email)
                }
            });

            function show_modals() {
                $(".jsc_bottom_modal , .jsc_land_detail").removeClass(function(index, className) {
                    return (className.match(/(^|\s)animate__\S+/g) || []).join(' ');
                });
                $('.jsc_bottom_modal , .jsc_land_detail').removeClass('invisible');
                $('.jsc_bottom_modal ').addClass('animate__animated animate__slideInUp');
                $('.jsc_land_detail').addClass('animate__animated animate__slideInDown');
            }
            show_modals();


            //debug
            $('.jsc_land_id').text(JSON.stringify(clickedState))

            //check im owner
            if (clickedState.user_id != user_id) {
                $('.jsc_price').prop("disabled", true)
            } else {
                $('.jsc_price').prop("disabled", false)
            }
            //setprice
            $('.jsc_price').val(clickedState.price)

            //
            $('.jsc_clicked_state_id').val(clickedStateId)
            $('.jsc_land_name').text("Azadi Tower")
            ///
            $('.jsc_clicked_land_name').text("Azadi Tower")
            // $('.jsc_clicked_land_owner').text(clickedState.name)
            $('.jsc_clicked_land_id').text(clickedState.id)
            $('.jsc_clicked_land_geo_id').text(clickedState.geo_id)
            $('.jsc_clicked_land_price').text(clickedState.price)
            $('.jsc_clicked_land_price').text(clickedState.price)
            $('.jsc_clicked_land_picture').attr('href', clickedState.picture)
            $('.jsc_clicked_land_picture').attr('src', clickedState.picture)
            $('.jsc_clicked_land_area').text(clickedStateArea)

        }
        //closemodals
        function close_modals() {
            $('.jsc_close_land_modals').on('click', () => {
                $(".jsc_bottom_modal , .jsc_land_detail").removeClass(function(index, className) {
                    return (className.match(/(^|\s)animate__\S+/g) || []).join(' ');
                });
                $('.jsc_bottom_modal').addClass('animate__animated animate__slideOutDown');
                $('.jsc_land_detail').addClass('animate__animated animate__slideOutUp');
                $('.jsc_bottom_modal , .jsc_land_detail').toggleClass('visible', 'invisible');
            })
        }
        close_modals()
    </script>
    <script>
        $('.jsc_profile_menu_close').on('click', () => {
            animateCSS('.jsc_profile_menu', 'fadeOutUp').then(function() {
                $('.jsc_profile_menu').addClass('invisible')
            })
        })

        $('.jsc_profile').on('click', () => {
            $('.jsc_profile_menu').removeClass('invisible')
            animateCSS('.jsc_profile_menu', 'fadeInDown').then(function() {})
        })
    </script>

    <script>
        $('.jsc_open_profile_setting_modal').on('click', () => {

        })
    </script>
    <div class="jsc_modal_profile fixed hidden inset-0 m-auto border-[#6BB8FF] rounded-lg w-[400px] z-40 h-max border-2 bg-black bg-opacity-90  text-white">
        <header>
            <div class="jsc_modal_hide_profile flex items-center justify-end w-full px-4 py-4 ">
                <ion-icon class="text-2xl filter opacity-80" name="close-circle"></ion-icon>
            </div>
        </header>
        <section id="profile_setting_body" class="py-8">
            <div class="grid grid-cols-2 gap-y-6">
                <div class="col-span-1 pl-[30px] flex  items-center">
                    Avatar :
                </div>
                <div class="col-span-1 flex justify-end pr-[30px] items-center">
                    <div class="jsc_my_avatar border-[#6BB8FF] rounded-full border block w-[100px] h-[100px]">
                        <div><img class="jsc_my_selected_avatar_img" src="{{ auth()->user()->avatar ?? '' }}" class="w-full border-2 rounded-full border-[#6BB8FF] cursor-pointer" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="jsc_avatars grid grid-cols-5 px-[30px] gap-2 hidden">
                        <div class="jsc_hover_avatar absolute w-[200px] flex items-center hidden p-4 justify-center h-[200px] right-[-220px] border-[#6BB8FF] border-2  bg-black">
                            <avatar src="{{ auth()->user()->avatar ?? '' }}" class="w-full h-full" alt="">
                        </div>
                        {{--  --}}
                        <avatar><img src="{{ asset('img/avatar/A1578.png') }}" class="w-14 h-14 ring-2 rounded-full ring-[#6BB8FF] cursor-pointer" alt="">
                        </avatar>
                        <avatar><img src="{{ asset('img/avatar/A1579.png') }}" class="w-14 h-14 ring-2 rounded-full ring-[#6BB8FF] cursor-pointer" alt="">
                        </avatar>
                        <avatar><img src="{{ asset('img/avatar/A1580.png') }}" class="w-14 h-14 ring-2 rounded-full ring-[#6BB8FF] cursor-pointer" alt="">
                        </avatar>
                        <avatar><img src="{{ asset('img/avatar/A1581.png') }}" class="w-14 h-14 ring-2 rounded-full ring-[#6BB8FF] cursor-pointer" alt="">
                        </avatar>
                        <avatar><img src="{{ asset('img/avatar/A1582.png') }}" class="w-14 h-14 ring-2 rounded-full ring-[#6BB8FF] cursor-pointer" alt="">
                        </avatar>
                        {{--  --}}
                        <avatar><img src="{{ asset('img/avatar/A1583.png') }}" class="w-14 h-14 ring-2 rounded-full ring-[#6BB8FF] cursor-pointer" alt="">
                        </avatar>
                        <avatar><img src="{{ asset('img/avatar/A1584.png') }}" class="w-14 h-14 ring-2 rounded-full ring-[#6BB8FF] cursor-pointer" alt="">
                        </avatar>
                        <avatar><img src="{{ asset('img/avatar/A1585.png') }}" class="w-14 h-14 ring-2 rounded-full ring-[#6BB8FF] cursor-pointer" alt="">
                        </avatar>
                        <avatar><img src="{{ asset('img/avatar/A1586.png') }}" class="w-14 h-14 ring-2 rounded-full ring-[#6BB8FF] cursor-pointer" alt="">
                        </avatar>
                        <avatar><img src="{{ asset('img/avatar/A1587.png') }}" class="w-14 h-14 ring-2 rounded-full ring-[#6BB8FF] cursor-pointer" alt="">
                        </avatar>
                        {{--  --}}
                        <avatar><img src="{{ asset('img/avatar/A1588.png') }}" class="w-14 h-14 ring-2 rounded-full ring-[#6BB8FF] cursor-pointer" alt="">
                        </avatar>
                        <avatar><img src="{{ asset('img/avatar/A1589.png') }}" class="w-14 h-14 ring-2 rounded-full ring-[#6BB8FF] cursor-pointer" alt="">
                        </avatar>
                        <avatar><img src="{{ asset('img/avatar/A1590.png') }}" class="w-14 h-14 ring-2 rounded-full ring-[#6BB8FF] cursor-pointer" alt="">
                        </avatar>
                        <avatar><img src="{{ asset('img/avatar/A1591.png') }}" class="w-14 h-14 ring-2 rounded-full ring-[#6BB8FF] cursor-pointer" alt="">
                        </avatar>
                        <avatar><img src="{{ asset('img/avatar/A1592.png') }}" class="w-14 h-14 ring-2 rounded-full ring-[#6BB8FF] cursor-pointer" alt="">
                        </avatar>
                        {{--  --}}
                        <avatar><img src="{{ asset('img/avatar/A1593.png') }}" class="w-14 h-14 ring-2 rounded-full ring-[#6BB8FF] cursor-pointer" alt="">
                        </avatar>
                        <avatar><img src="{{ asset('img/avatar/A1594.png') }}" class="w-14 h-14 ring-2 rounded-full ring-[#6BB8FF] cursor-pointer" alt="">
                        </avatar>
                        <avatar><img src="{{ asset('img/avatar/A1595.png') }}" class="w-14 h-14 ring-2 rounded-full ring-[#6BB8FF] cursor-pointer" alt="">
                        </avatar>
                        <avatar><img src="{{ asset('img/avatar/A1596.png') }}" class="w-14 h-14 ring-2 rounded-full ring-[#6BB8FF] cursor-pointer" alt="">
                        </avatar>
                        <avatar><img src="{{ asset('img/avatar/A1597.png') }}" class="w-14 h-14 ring-2 rounded-full ring-[#6BB8FF] cursor-pointer" alt="">
                        </avatar>

                    </div>
                </div>
                <div class="col-span-1 pl-[30px] flex items-center">
                    Username :
                </div>
                <div class="flex items-center col-span-1">
                    <input value="{{ auth()->user()->username }}" type="text" class="jsc_new_username rounded w-[170px] bg-black bg-opacity-60 block border py-2 px-4 border-[#6BB8FF] text-[#6BB8FF]">
                </div>

                <div class="col-span-2 px-[30px]">
                    <div class="jsc_update_profile cursor-pointer rounded bg-[#6BB8FF] text-center w-full py-2  px-4">
                        Change </div>
                </div>
            </div>
        </section>
    </div>

    <script>
        $('.jsc_my_avatar').on('click', function() {
            $('.jsc_avatars').toggleClass('hidden', 'grid')
        })
        $('avatar img').on('mouseover', function() {
            $('.jsc_hover_avatar img').attr('src', $(this).attr('src'));
            $('.jsc_hover_avatar').addClass('flex');
            $('.jsc_hover_avatar').removeClass('hidden');
        })
        $('avatar img').on('mouseout', function() {
            $('.jsc_hover_avatar').removeClass('flex')
            $('.jsc_hover_avatar').addClass('hidden')
        })
        $('avatar img').on('click', function() {
            $('.jsc_my_selected_avatar_img').attr('src', $(this).attr('src'));
        })
        $('.jsc_update_profile').on('click', function() {
            $.ajax({
                type: "get",
                url: "{{ route('user.update') }}",
                data: {
                    'avatar': $('.jsc_my_selected_avatar_img').attr('src'),
                    'username': $('.jsc_new_username').val(),
                },
                success: function(response) {
                    console.log(response);
                    window.location.reload()
                },
                error: function(e, r, x) {
                    console.log(e);
                    console.log(r);
                    console.log(x);
                }
            });
        })
        $('.jsc_modal_hide_profile').on('click', function() {
            $('.jsc_modal_profile').hide();
        })
        $('.jsc_open_profile_setting_modal').on('click', function() {
            $('.jsc_modal_profile').show();
        })
    </script>


</x-guest-layout>