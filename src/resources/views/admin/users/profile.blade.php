@extends('../../layout')

@section('content')
    <div class="container col-md-10">
        <div class="row ml-3 mb-3">
            <h2 class="font-weight-bold text-monospace">プロフィール</h2>
        </div>

        <div class="row col-md-8 m-auto">
            <div class="ml-2 card w-75">

                <div class="card-body">
                    <div class="card-title mb-4">
                        <div class="d-flex justify-content-center">
                            <div class="image-container">
                                <img src="data:image/jpeg;base64,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"
                                    id="imgProfile" style="width: 150px; height: 150px" class="img-thumbnail" />
                                <div class="middle">
                                    <input type="button" class="btn btn-secondary" id="btnChangePicture" value="Change" />
                                    <input type="file" style="display: none;" id="profilePicture" name="file" />
                                </div>
                            </div>
                            <div class="userData ml-2">
                                <h2 class="d-block" style="font-size: 1.5rem; font-weight: bold">{{ $user->name }}</h2>
                                <h6 class="d-block"><strong>年齢: </strong>26</h6>
                                <h6 class="d-block"><strong>所属先: </strong> 開発部</h6>
                            </div>
                        </div>
                        <div>
                            <input type="button" class="btn btn-primary d-none" id="btnDiscard" value="Discard Changes" />
                        </div>
                    </div>

                    <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="basicInfo-tab" data-toggle="tab" href="#basicInfo" role="tab"
                                aria-controls="basicInfo" aria-selected="true">基本情報</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="connectedServices-tab" data-toggle="tab" href="#connectedServices"
                                role="tab" aria-controls="connectedServices" aria-selected="false">他に</a>
                        </li>
                    </ul>
                    <div class="tab-content ml-1" id="myTabContent">
                        <div class="tab-pane fade show active" id="basicInfo" role="tabpanel"
                            aria-labelledby="basicInfo-tab">


                            <div class="row col-md-10">
                                <div class="col-sm-3 col-md-6 col-5">
                                    <label style="font-weight:bold;">名前</label>
                                </div>
                                <div class="col-md-4 col-6">
                                    {{ $user->name }}
                                </div>
                            </div>
                            <hr />

                            <div class="row col-md-10">
                                <div class="col-sm-3 col-md-6 col-5">
                                    <label style="font-weight:bold;">誕生日</label>
                                </div>
                                <div class="col-md-4 col-6">
                                    2020/01/01
                                </div>
                            </div>
                            <hr />


                            <div class="row col-md-10">
                                <div class="col-sm-3 col-md-6 col-5">
                                    <label style="font-weight:bold;">メールアドレス</label>
                                </div>
                                <div class="col-md-4 col-6">
                                    {{ $user->email }}
                                </div>
                            </div>
                            <hr />
                            <div class="row col-md-10">
                                <div class="col-sm-3 col-md-6 col-5">
                                    <label style="font-weight:bold;">住所</label>
                                </div>
                                <div class="col-md-4 col-6">
                                    東京
                                </div>
                            </div>
                            <hr />

                        </div>
                        <div class="tab-pane fade" id="connectedServices" role="tabpanel"
                            aria-labelledby="ConnectedServices-tab">
                            何もない
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>
@endsection
