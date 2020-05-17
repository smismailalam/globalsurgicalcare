@extends('layouts.app')
@section('content')
<div id="Subheader" style="padding:40px 0;">
    <div class="container">
        <div class="column one">
            <h1 class="title">Bank Details</h1>
        </div>
    </div>
</div>
<div id="Content">
    <div class="content_wrapper clearfix">
        <div class="sections_group">
            <table class="table table-bordered mt-4">
                <thead>                    
                    <tr class="text-left">
                        <th scope="col">Account Name</th>
                        <td scope="col">AQ TRADING</td>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-left">
                        <th>Account Number</th>
                        <td>323361667679</td>
                    </tr>
                    <tr class="text-left">
                        <th scope="col">Swift Code</th>
                        <td>BKCHCNBJ110</td>
                    </tr>
                    <tr class="text-left">
                        <th scope="col">Bank</th>
                        <td>BANK OF CHINA BEIJING BRANCH </td>
                    </tr>
                    <tr class="text-left">
                        <th scope="col">Branch</th>
                        <td>UTAJIMABASI BRANCH</td>
                    </tr>
                    <tr class="text-left">
                        <th scope="col">Address</th>
                        <td>NO.2 CHAO YANG MEN NEI DA JIE,DONGCHENG DISTRICT,BEIJNG 100010,CHINA </td>
                    </tr>
                </tbody>
            </table>
        </div>   
    </div>
</div>
@endsection