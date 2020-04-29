<?php

function injectHtml($variables)
{
    $html = '
<div style="width:100%!important;min-width:100%;background-color:#ffffff;margin:0;padding:0;font:15px/24px Arial,\'Helvetica Neue\',Helvetica,FreeSans,sans-serif" bgcolor="#FFFFFF">
   <img src="https://ci6.googleusercontent.com/proxy/-xFc-Kwv4HGhJrnYIE_DTU1_QUaiMDytqUnUcJa-bzTBuAP8grSW01pwPzEcKBSzySx7WMX_4IsO7Mx99wZFNjraxtWaoihwAG3oBrIjks2xt0Z5ghBfPnQI_44=s0-d-e1-ft#https://trackmail.reg.ru/Mi4yNGVlY2Q4MzI2LjUzZDRmYjcuMTU2N2ZiNmE5MTJk.gif" width="1" height="1" alt="" class="CToWUd">
   <img src="https://ci6.googleusercontent.com/proxy/m33JTROPZUosS3rY6YhHB799vLA23e3mWaNchtnE7XkcB0bNUxuZhLMGFYunveYUHM2eM4S0g_TWXETcUk3nI0JgNeS0P1UA4OZSvD7F2zzci8IXYS_PjeDbpolk_iwiIYj89b2JAINPmmCaIO0pSQZ9hTZab9yStpelw8Qk7OZLbYlCsS-qJjR-dgBqu1AqXtGSuvIDXK1wPF0ZT_Zd2b0U7IWxGY_648yLgfK__ZYSElr6UEwfLeMop4MLMGHJbYgx-B0jMJ8skLZ7Jqto1cFoMLfQO_WK9OsRlhBealLNmRWdLyohf2X5MCERp-HMRrPv3ZyjW_Kf5IrzLp_DLOE=s0-d-e1-ft#https://www.reg.ru/misc/ce_mailpixel?sign=5cb90b548e41f2fa529c9c6d28423dde&amp;bulkmail_id=4799&amp;analytics_id=4799&amp;tmplid=News/Single&amp;msg_id=15862526843.eb7C.20904@sender2.dc2.reg.ru&amp;email_id=286460099-c7136dfac4ec6a463ecb539f124c59631a4b1eaf" width="1" height="1" alt="" class="CToWUd">
   <div style="width:100%;table-layout:fixed">
      <table align="center" style="border-spacing:0;border-collapse:collapse;color:#364364;width:100%;max-width:580px">
         <tbody>
            <tr style="text-align:left" align="left">
               <td style="vertical-align:top;text-align:left;background-color:#ffcc03;padding:12px" align="left" bgcolor="#FFCC03" valign="top">
                  <table width="100%" style="border-spacing:0;border-collapse:collapse;color:#364364">
                     <tbody>
                        <tr style="text-align:left" align="left">
                           <td style="vertical-align:top;text-align:left;background-color:#ffffff;padding:35px" align="left" bgcolor="#FFFFFF" valign="top">
                              <p style="max-height:132px;background-color:#f2f4f9;margin:0 0 24px;font:15px/24px Arial,\'Helvetica Neue\',Helvetica,FreeSans,sans-serif">
                                 <img src="' . $variables['image_1'] . '" alt="" style="display:block;width:100%;height:auto;border:0" class="CToWUd">
                              </p>
                              <p style="letter-spacing:-0.02em;margin:0 0 18px;font:bold 32px/36px Arial,\'Helvetica Neue\',Helvetica,FreeSans,sans-serif">' . $variables['header_2'] . '</p>
                              <div style="margin:24px 0 0;padding:0">
                                 <a href="https://www.reg.ru/r?to=https%3A%2F%2Fdocs.google.com%2Fforms%2Fd%2Fe%2F1FAIpQLSdh8gvLosUpcfnDg1sBwVYzUKMn40G6dlhvL_HGlhEndfC7QQ%2Fviewform%3Fusp%3Dsf_link&amp;sign=69ce6987818c3ee6c822a1f913238d64&amp;rtm_source=e-mail&amp;rtm_medium=e-mail&amp;rtm_campaign=NewsSingle_4799" style="color:#ffffff;text-align:center;text-decoration:none;font:bold 20px/24px Arial,\'Helvetica Neue\',Helvetica,FreeSans,sans-serif" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://www.reg.ru/r?to%3Dhttps%253A%252F%252Fdocs.google.com%252Fforms%252Fd%252Fe%252F1FAIpQLSdh8gvLosUpcfnDg1sBwVYzUKMn40G6dlhvL_HGlhEndfC7QQ%252Fviewform%253Fusp%253Dsf_link%26sign%3D69ce6987818c3ee6c822a1f913238d64%26rtm_source%3De-mail%26rtm_medium%3De-mail%26rtm_campaign%3DNewsSingle_4799&amp;source=gmail&amp;ust=1588270462913000&amp;usg=AFQjCNGuWUNrgA3uZOvV4EY09seOgeWkaA">
                                    <div style="display:block;border-radius:3px;color:#ffffff;text-align:center;background-color:#00c084;margin:0;padding:0;border-color:#00c084;border-style:solid;border-width:18px 30px;font:bold 20px/24px Arial,\'Helvetica Neue\',Helvetica,FreeSans,sans-serif" align="center">
                                       Static ՀԱՅերեն Static
                                    </div>
                                 </a>
                              </div>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </td>
            </tr>
         </tbody>
      </table>
   </div>
   <div class="yj6qo"></div>
   <div class="adL">
   </div>
</div>
';

    return $html;
}