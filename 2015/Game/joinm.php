<?php
$genid = rand(0, 1000);
$userg = "Guest";

    header("Content-Type: text/plain");


    function get_signature($script)
    {
        $signature = "";
        openssl_sign($script, $signature, file_get_contents("PK.pem"), OPENSSL_ALGO_SHA1);
        return base64_encode($signature);
    }

   $joinscriptu = [
        "ClientPort" => 0,
        "MachineAddress" => "127.0.0.1",
        "ServerPort" => 53640,
        "PingUrl" => "",
        "PingInterval" => 20,
        "UserName" => $userg,
        "SeleniumTestMode" => false,
        "UserId" => $genid,
        "SuperSafeChat" => false,
        "CharacterAppearance" => "http://www.yourdomain.shouldbe10chars/v1.1/avatar-fetch?id=$genid",
        "ClientTicket" => "",
        "GameId" => 1818,
        "PlaceId" => 1818,
        "MeasurementUrl" => "",
        "WaitingForCharacterGuid" => "26eb3e21-aa80-475b-a777-b43c3ea5f7d2",
        "BaseUrl" => "http://www.yourdomain.shouldbe10chars",
        "ChatStyle" => "ClassicAndBubble",
        "VendorId" => "0",
        "ScreenShotInfo" => "",
        "VideoInfo" => "",
        "CreatorId" => "1",
        "CreatorTypeEnum" => "User",
        "MembershipType" => "TurboBuildersClub",
        "AccountAge" => "100",
        "CookieStoreFirstTimePlayKey" => "rbx_evt_ftp",
        "CookieStoreFiveMinutePlayKey" => "rbx_evt_fmp",
        "CookieStoreEnabled" => true,
        "IsRobloxPlace" => true,
        "GenerateTeleportJoin" => false,
        "IsUnknownOrUnder13" => false,
        "SessionId" => "39412c34-2f9b-436f-b19d-b8db90c2e186|00000000-0000-0000-0000-000000000000|0|190.23.103.228|8|2021-03-03T17:04:47+01:00|0|null|null",
        "DataCenterId" => 0,
        "UniverseId" => 3,
        "BrowserTrackerId" => 0,
        "UsePortraitMode" => false,
        "FollowUserId" => 0,
        "characterAppearanceId" => 1
    ];

    $data = json_encode($joinscriptu, JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);
    $signature = get_signature("\r\n" . $data);
    exit("--rbxsig%". $signature . "%\r\n" . $data);
