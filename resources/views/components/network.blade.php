<div class="bg-white p-8" id="network"
    style="padding-left: 173px;padding-right: 115px;border-bottom: 2px solid #2f3543;font-family:'Nunito', serif;text-align: justify;">
    <div style="font-size:18px;margin-left: -39px;line-height: 28px;line-height: 33px;" id="details">
        {!! $networkData->details !!}
    </div>
    <div id="header" style="text-align: center; margin-top: 10%;">
        <h1 id="title"
            style="font-family: Century Gothic, sans-serif; font-size: 23px; margin-bottom: -8px; font-weight: 500; color: black;">
            DSTUDIO NETWORK</h1>
        <div id="banner"
            style="background-color: rgba(71,80,95,255);padding-top: 1%; padding-bottom: 2%; margin-bottom: -32px;width: 45%;text-align: center;margin-left: auto;margin-right: auto;font-family: Century Gothic, sans-serif;font-size: 14px;color: white;letter-spacing: 2px;">
            Collaborate | Connect | Create <br>
            Knowledge Sharing | Cost Advantages
        </div>
    </div>
    <div id="lines"
        style="margin-top: 32px;background-color: #FFBF00;padding: 6px;margin-left: -173px;width: 1248px;margin-bottom: -32px;">
    </div>
</div>
<style>
    h2 {
        font-size: 28px;

    }

    @media screen and (max-width: 768px) and (min-width: 320px) {
        #header {
            margin-top: 5%;
        }

        #network {
            width: 100% !important;
            padding-left: 40px !important;
            padding-right: 21px !important;
        }

        #details {
            margin-left: -9px !important;
        }

        #title {
            font-size: 18px;
            margin-bottom: -5px;
        }

        #banner {
            width: 104% !important;
            margin-left: -3% !important;
        }

        #lines {
            width: 399px !important;
            margin-left: -32px !important;
            margin-right: auto !important;
        }
    }
</style>
