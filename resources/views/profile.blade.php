@extends('layouts.app')

@section('content')
<div style="padding-top:90px">
    <div class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card card-block p-card">
                        <div class="profile-box">
                            <div class="profile-card rounded">
                                <img src="localhost/public/datum/assets/images/user/1.jpg"
                                    alt="profile-bg" class="avatar-100 rounded d-block mx-auto img-fluid mb-3">
                                <h3 class="font-600 text-white text-center mb-0">nghia</h3>
                                <p class="text-white text-center mb-5">0đ</p>
                            </div>
                            <div class="pro-content rounded">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="p-icon mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="text-primary" width="20"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 19v-8.93a2 2 0 01.89-1.664l7-4.666a2 2 0 012.22 0l7 4.666A2 2 0 0121 10.07V19M3 19a2 2 0 002 2h14a2 2 0 002-2M3 19l6.75-4.5M21 19l-6.75-4.5M3 10l6.75 4.5M21 10l-6.75 4.5m0 0l-1.14.76a2 2 0 01-2.22 0l-1.14-.76">
                                            </path>
                                        </svg>
                                    </div>
                                    <p class="mb-0 eml">luffy.1999tm@gmail.com</p>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <div class="p-icon mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="text-primary" width="20"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M16 8l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2M5 3a2 2 0 00-2 2v1c0 8.284 6.716 15 15 15h1a2 2 0 002-2v-3.28a1 1 0 00-.684-.948l-4.493-1.498a1 1 0 00-1.21.502l-1.13 2.257a11.042 11.042 0 01-5.516-5.517l2.257-1.128a1 1 0 00.502-1.21L9.228 3.683A1 1 0 008.279 3H5z">
                                            </path>
                                        </svg>
                                    </div>
                                    <p class="mb-0"></p>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <div class="p-icon mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                            width="24" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <p class="mb-0">Đang tắt bảo mật</p>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <div class="social-ic d-inline-flex rounded">
                                        <a href="#">
                                            <svg width="24" viewBox="0 0 512 512" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0)">
                                                    <path
                                                        d="M341.269 85.0133H388.011V3.60533C379.947 2.496 352.213 0 319.915 0C252.523 0 206.357 42.3893 206.357 120.299V192H131.989V283.008H206.357V512H297.536V283.029H368.896L380.224 192.021H297.515V129.323C297.536 103.019 304.619 85.0133 341.269 85.0133V85.0133Z"
                                                        fill="black"></path>
                                                </g>
                                                <defs>
                                                    <clipPath>
                                                        <rect width="512" height="512" fill="white"></rect>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </a>
                                        <a href="#">
                                            <svg width="24" viewBox="0 0 512 512" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path
                                                        d="M459.392 151.744C480.213 136.96 497.728 118.507 512 97.2587V97.2373C492.949 105.579 472.683 111.125 451.52 113.813C473.28 100.821 489.899 80.4053 497.707 55.808C477.419 67.904 455.019 76.4373 431.147 81.216C411.883 60.6933 384.427 48 354.475 48C296.363 48 249.579 95.168 249.579 152.981C249.579 161.301 250.283 169.301 252.011 176.917C164.757 172.651 87.5307 130.837 35.648 67.1147C26.6027 82.8373 21.2693 100.821 21.2693 120.171C21.2693 156.523 39.9787 188.736 67.904 207.403C51.0293 207.083 34.496 202.176 20.48 194.475V195.627C20.48 246.635 56.8533 289.003 104.576 298.773C96.0213 301.12 86.72 302.229 77.056 302.229C70.336 302.229 63.552 301.845 57.1947 300.437C70.784 341.995 109.397 372.565 155.264 373.568C119.552 401.493 74.1973 418.325 25.1093 418.325C16.512 418.325 8.256 417.941 0 416.896C46.5067 446.869 101.589 464 161.024 464C346.261 464 466.987 309.461 459.392 151.744V151.744Z"
                                                        fill="black"></path>
                                                </g>
                                            </svg>
                                        </a>
                                        <a href="#">
                                            <svg width="24" viewBox="0 0 512 512" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0)">
                                                    <path
                                                        d="M500.672 126.485L501.312 130.666C495.125 108.714 478.421 91.7756 457.195 85.6103L456.747 85.5036C416.832 74.6663 256.213 74.6663 256.213 74.6663C256.213 74.6663 95.9999 74.453 55.6799 85.5036C34.0479 91.7756 17.3226 108.714 11.2426 130.218L11.1359 130.666C-3.77607 208.554 -3.88274 302.144 11.7973 385.536L11.1359 381.312C17.3226 403.264 34.0266 420.202 55.2533 426.368L55.7013 426.474C95.5733 437.333 256.235 437.333 256.235 437.333C256.235 437.333 416.427 437.333 456.768 426.474C478.421 420.202 495.147 403.264 501.227 381.76L501.333 381.312C508.117 345.088 512 303.402 512 260.821C512 259.264 512 257.685 511.979 256.106C512 254.656 512 252.928 512 251.2C512 208.597 508.117 166.912 500.672 126.485V126.485ZM204.971 333.888V178.304L338.645 256.213L204.971 333.888Z"
                                                        fill="black"></path>
                                                </g>
                                                <defs>
                                                    <clipPath>
                                                        <rect width="512" height="512" fill="white"></rect>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </a>
                                        <a href="#">
                                            <svg width="24" viewBox="0 0 512 512" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0)">
                                                    <path
                                                        d="M262.955 0C122.603 0.0213333 48 89.9413 48 187.989C48 233.451 73.408 290.176 114.091 308.16C125.696 313.387 124.16 307.008 134.144 268.821C134.933 265.643 134.528 262.891 131.968 259.925C73.8133 192.661 120.619 54.3787 254.656 54.3787C448.64 54.3787 412.395 322.795 288.405 322.795C256.448 322.795 232.64 297.707 240.171 266.667C249.301 229.696 267.179 189.952 267.179 163.307C267.179 96.1493 167.125 106.112 167.125 195.093C167.125 222.592 176.853 241.152 176.853 241.152C176.853 241.152 144.661 371.2 138.688 395.499C128.576 436.629 140.053 503.211 141.056 508.949C141.675 512.107 145.216 513.109 147.2 510.507C150.379 506.347 189.291 450.837 200.192 410.709C204.16 396.096 220.437 336.789 220.437 336.789C231.168 356.16 262.101 372.373 295.061 372.373C393.109 372.373 463.979 286.187 463.979 179.243C463.637 76.7147 375.893 0 262.955 0V0Z"
                                                        fill="black"></path>
                                                </g>
                                                <defs>
                                                    <clipPath>
                                                        <rect width="512" height="512" fill="white"></rect>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-sm-4 col-lg-4">
                            <div class="card card-block card-stretch card-height">
                                <div class="card-body text-center">
                                    <h2 class="mb-2 mt-3 text-primary">0đ</h2>
                                    <h4>Tổng Tiền Nạp</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-lg-4">
                            <div class="card card-block card-stretch card-height">
                                <div class="card-body text-center">
                                    <h2 class="mb-2 mt-3 text-success">
                                        0đ</h2>
                                    <h4>Số Dư Sử Dụng</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-lg-4">
                            <div class="card card-block card-stretch card-height">
                                <div class="card-body text-center">
                                    <h2 class="mb-2 mt-3 text-warning">0đ</h2>
                                    <h4>Số Dư Hiện Tại</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-block">
                        <div class="card-header d-flex justify-content-between pb-0">
                            <div class="header-title">
                                <h4 class="card-title mb-0">Thông Tin Cá Nhân</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label required fw-bold fs-6">Họ và Tên</label>
                                <div class="col-lg-8 fv-row">
                                    <input type="text" id="fullname" class="form-control" placeholder="Nhập họ và tên"
                                        value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label fw-bold fs-6">
                                    <span class="required">Tên đăng nhập</span>
                                </label>
                                <div class="col-lg-8 fv-row">
                                    <input type="hidden" id="token" value="d7cdfffb61b5c35e31a5b049e923433c">
                                    <input type="text" class="form-control" value="nghia" readonly="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label required fw-bold fs-6">Số điện thoại</label>
                                <div class="col-lg-8 fv-row">
                                    <input type="text" id="phone" class="form-control" placeholder="Nhập số điện thoại"
                                        value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label required fw-bold fs-6">Địa chỉ Email (*)</label>
                                <div class="col-lg-8 fv-row">
                                    <input type="email" id="email" class="form-control" placeholder="Nhập địa chỉ Email"
                                        value="luffy.1999tm@gmail.com" required=""
                                        style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDpiYmZkZTQxOS00ZGRkLWU5NDYtOWQ2MC05OGExNGJiMTA3N2YiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6RDAyNDkwMkRDOTIyMTFFNkI0MzFGRTk2RjM1OTdENTciIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6RDAyNDkwMkNDOTIyMTFFNkI0MzFGRTk2RjM1OTdENTciIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTUgKFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6OTU2NTE1NDItMmIzOC1kZjRkLTk0N2UtN2NjOTlmMjQ5ZGFjIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOmJiZmRlNDE5LTRkZGQtZTk0Ni05ZDYwLTk4YTE0YmIxMDc3ZiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Po+RVEoAAApzSURBVHja3Fp5bBTnFf/N7L32rm98gI0NmNAQjoAR4WihCCdNHFBDonCmJQWhtiRS01JoSlCqCqhoFeUoTUpTOSptuKSK0HIYHI5wCWwMxmAo8QXYDvg+du31ntP3zc7Osd61zR9V4o412m/mm/3mHb/3e+99a87j8UA68uh8i84F+GYfp+jcSucVdsFJCiyjcy+G17Gczn1MgcdpUInheUxkCpygQf4wVaCYKSBgGB88nc5hLL+TKTCcPSDoNVdCZF04jtPMh66HcrBno607oGT0nYG+G5JBP9giQ70vvoz+OHBDWkMzF2YPtsZQjaSPtrBBpwOv139t2GD5iSkR7v0hKaDjg8Kfrv4StR2tsBhNiqU4aaAeQ3tfUEwpzwuiMIJ4LYRNC9LYT0IGAn7My8hBVoydxoGoMI6uAD2oN+ixu6wEP9xTCBgN0NHJ7oOnl/NQxuyTk5SRr5V5eRztUzZKaA1avK0JeROeROmiNdDRfa/f/2gQ0kmfp2u+pFkdxqemw4+AuLgQJpxaYHHMSxKJygiSYKpnID0TsqbkAnapo/XrnJ1AfBKW5kwU5wMBgrLB0A9Sai/owwMx5Cqb2QyD0RgMTFFAyY18cMxzPAI8FHjwKkXEZ3lZeOWeSng+GO5McDdB5X5nC8YmjsBf5y7C/NQsEVc8GfBGexOsegPG2hLg9XklhbnoHhA0rKLAg/0xQfT0wl6/D/WOdlhMJoy0xYkKBST4cRrPSKkSWugI0pyeYu2BywmXuxcrJ0zHrtnPIUanl6H1zq3L2Hi5CLlJaSh9djVi9Ub4fL7Bg1gTsCpFmAwuvxfMg+vz5qC2qx3Ham4jLS4BNpMZPiEQfBYqQdUBz6m8RxCr7WpFnDUWH85+CavHTpJfXd/rwLpLR1F09xZ4kwVNbheaXb2w2U2DxwCn4uKg8EG/MEiw8f3uLrybvxg/y5srzmw+fwLbS79Am6cP2XHxpIQQDPR+Vudkq3d6+9De04WF2d/Cn596luARL7//07uVeOPK52jp7cao5DQ4vR7YyfIGno9aC/VjIRlKGi8o2ln0BvnxbXOfxvEXX0UmQamqtQle8gLDtcIynAwtnY5HrbNDVGDrzGdQnL9cFt5F0Fhz+ShWnfsnugNeZFM8yIHOc8p6gyoQ5goOWrobRVbe9EUR/lByVn706axxuLZiPV6ZNAMNXW1ocvWIwoYsz5MAbuL3OqLIyUmpOP/camyePEf+/umme5hyrBCFd0qRGpeENKtNhKPac6HoDM/QfDQIaXDMKQnKajDCTFl646lDWPTZbgrmLvFROyW73fkvovCZl2GiQKzpbBW/xjJ6IwXqw55urJ8yB1eeX4NZKSPlV2ypOIcFJ/eiqqcDoxPTYeR0YkKDmgi4IeYBjXacJiDkCx9Rno3Yx2pOw+Gqm7jS8hXenV+AZbnBIHyVktC8kdn4ydnDOHH3NmNzZCSl44/zX8CS0RPk5asdHSJkzjZWI9GeALvBLFkdETI792i1kIZSubD4ECmTWYhHbkoaGnscWH54D05NnYWd8wpgpCAdQ5x9vOAVbC0/JzLVjpn5SDFb5WU+ri7HG1dPoocCPzMxVVzXh4CUMyBRNjQxFK3C7V9Oh3tBjgFBU9eEvJERa0dfwIqPyy/iUnMDPpr3POakZYnzb039tubFbUSHr5Uex76aCliJPrPjk0lwIWgqThFazj9qJlNZUp2J+QEhFEmRkC7S4Se3G8jq45LTcbO9GXMPfYLt18718+Zhgsq0I4XYV30dGXHJSCaP+CKV0+HQVddNEeTkMVgmi1JxqhdmYjAIjIlLRBIlns0XjuF7RXtQ5+iE0+fBprJTWFS8l4LZQfSYSjTLBWEIxeIyWUBLv8zbrOyI1mMMueAXQjTECzKE2A1BrHmCVywIGRvFElUeb6jGwqJ/wE4ZuryjCSOoPGYMFqLHkEGEaNVpv4oAg5fT/WIgyiKy2blglhAETnZMKMBziFk6PG40E+4zY+PETO6HEE5tEd6jULYIlQA3YIs6sAfCDCGor7j+TCXI8gkUG1TRksXF6hXB8nogOow0JYR3PUNqaKSjL1T1MSsLIXpDfwvKWVKJF0FyV1DpsD453MoRy5hQVcvaECq3yXdeVXc2oAIsC7KbdkpW/vZW3KeanOOlQJLre17bmYV6AekZQccp/M1D6dx0yj2l2RmgY2PruXuQYEtGosk0NAWYi9i5YfZ30UolbKOzGzEmo9IyQrV4iD14pW/QBCZULai6rgnzgkaRkN9YcqOA9wd8eH3MdCQYLfB5ff2RR61aN2vAwpUwUjf2TTq8Xm9/yAEOfqBNo//NXlqUsdgECxHv+bzeaHEO3ZYtW96kTw3AWCN95mIZXli7EWUVt/GXTz/Dpas30NLeiV9u/QD7/1WMC6UVMJsMeHP7TuRkjURGagp++usdqKt/gPrGJvzit+9h198PItDbh5wnxmFJxTGMMdmQSaXy72uu4pP6SixOHSNKVVByCA5KeHkJabjd3YptNSWI15uwrboEeXEplFvM8hZL2O6gJ+LWIvu022KQm52Jg0VnEGeLxYI5eTAbDbDHWqGnEjl9RBIaH7bgwP5/w+3xYsHcGfjo/UKsXf8D1FgsqLhVhR8tW4wNb7+HZnhweooPDZVn8LfJC7Hp2hFMTAkKX9b5EEfvXUe7rw8/Hj0ZLsL8keY6fCdxFH3ew4bsaVGbmailBMPbtEkTcGDX75CanIili/Px83UrwJPgPWRRMwW1nmp+i9mEaTOnkZf+Q574EzIfH4/0lCQkxtuROTKN4sggJgcXNTNrR02Ejuwz/fxeTE3NwXSyLDverirBytyZYg4501KP3Jh4pJljYaX1M0wxiJWa/BC5PFI57fN50e3sQUtbp3hdXnkHReSRdWuWITHBDlefGz6/Hy8VLBCFrb3XiBo6Hxubhco7tYixmLFzx6/w1JL5WH3jc/yGBG1wO2Gi4u9QUy3qqC8uar2HfLJ2rbMdH9y/jncmzIWHFPYQA3X7PegVBCVLRvAEP5ACDHZJ8XGwxVjEa+aNlIw0XLt5BxfLKuD3B+By9WHdqu9jx+bXERtjhZcSIIPUk0+Mx8kDH2LVysViB9fe48QMewpey55C5ZSAZKLF9++W4+XUcdg/vQAXZi1FY59TVOwxawJSDBZYdAasuHIIB7+qIgOZIv4OoKFRtYtCTNTa3gWTUQ9bbIwIn06HAwE/2zGjeyRwW2cXskelUw+sQ8ODZjEVWMjyXuLsEaSwnzzEtge7/F4k6I00z4n7Sqz576bAzSK46KRN5CZqPd00Z6cAtpKXWr1u1FKrmWm1I8McQ+9VsjEf3KVwRFRAHemhfOB2u2GKkg0ZQ7ANp/DcIXI3y+z0MrZZ7CelWP9g1BkUONC82xfcNjSy2ikQhEqAFObZ7oe46xug0sZDcFE2hgdUQIMxloEF5QcH9S7xYD98aDyqqna5cNaLUM8JMr61vUMYQhz6wRKY3DRF2N4OV3jAHzPC95xU11yU4lRA2NZOFBrlMHwP7v/iZ9biYSx/8bD/VwPmgVsI/uPEcDuYzLe44f7vNv8VYAB02UEWdC0FyQAAAABJRU5ErkJggg==&quot;) !important; background-repeat: no-repeat; background-size: 20px; background-position: 97% center; cursor: auto;"
                                        data-temp-mail-org="0">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label fw-bold fs-6">
                                    <span class="required">Thời gian đăng ký</span>
                                </label>
                                <div class="col-lg-8 fv-row">
                                    <input type="text" class="form-control" value="2023-02-07 22:27:29" readonly="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label fw-bold fs-6">
                                    <span class="required">Đăng nhập gần đây</span>
                                </label>
                                <div class="col-lg-8 fv-row">
                                    <input type="text" class="form-control" value="2023-02-07 22:27:29" readonly="">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="button" id="btnSaveProfile" class="btn btn-primary">Lưu Thay Đổi</button>
                            <a type="button" href="localhost/" class="btn btn-danger">Đóng</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection