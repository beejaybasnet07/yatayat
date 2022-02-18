@extends('master')
<style>
ul{
    list-style: none;
    padding: 10px;
    padding-top: 10px;

}
li{
    padding:7px;
}
</style>
<div class="container-fluid">
    <div class="row mt-5 pt-5" style="background-color: #646464; color:white">
        <div class="col-md-3 offset-md-2">
            <h6 class="ml-3">Top Routes</h6>
            <ul>
                <li>kathmandu-pokhara</li>
                <li>pokhara-kathmandu</li>
                <li>Kakarvitta-Kathmandu</li>
                <li>Bhirahawa- Kathmandu</li>
            </ul>
        </div>
        <div class="col-md-3">
            <h6 class="ml-3">Top operators</h6>
            <ul>
                <li> shaja yatayat</li>
                <li>Shakira Hiace</li>
                <li>Mount Makalu</li>
            </ul>
        </div>
        <div class="col-md-4">
            <h6 class="ml-3">Company</h6>
            <ul>
                <li><a href="#"style="color:white;">
                    about us</a>
                </li>
                <li>
                    <a href="#" style="color:white;">why Yatayat.com</a></li>
                <li>
                <a href="#" style="color:white;"> Terms/Conditions</a></li>
                <li>Contact us:</li>
                <li>01-5437377</li>
                <li>983977389</li>
                <li><a href="#"style="color:white;">
                <i class="fab fa-facebook fa-2x"></i></a></li>
          

            </ul>
        </div>
        
    </div>
    <hr style="padding: 0px; margin:0px;">
    <div class="row py-3" style="background-color: #646464; color:white">
        <div class="col-md-5 offset-md-2">
            <p>Copyright@2022 all right reserved  by Yatayat.com</p>
        </div>
        <div class="col">
        <span><p>Payment Partner</p> <img height="60px"  src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxESEhUSERAVFhIWGBYVGRgVEhAVFRMSFRUWFhcYFxUYHSggGhomHRYVITEiJSktLi4uFx8zODMsNygtLisBCgoKDg0OGxAQGzIlICY1LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIAKgBLAMBIgACEQEDEQH/xAAbAAEAAgMBAQAAAAAAAAAAAAAABQYDBAcBAv/EAEQQAAIBAgIGBwMIBgsBAAAAAAABAgMRBCEFBhIxQVETImFxgZGhMrHRFEJSYnKCksEjNFNzssIVFiQzQ1STotLh8Af/xAAaAQEAAwEBAQAAAAAAAAAAAAAAAgMEAQUG/8QAMBEAAgIBAgQEBAYDAQAAAAAAAAECAxEEEiExQVETYXGBIpGh0RQyscHh8CMz8XL/2gAMAwEAAhEDEQA/AJIAHzp4QAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAB7Spyk1GKbk8kkrt+BZdH6nVJZ1p7C+jG0peL3L1LK6pzeIoshXKf5UVkHRMPqvhY76bk+cpyforL0Nn+g8L/AJen+Fe80LQT6tfUvWjn3RzIF/xWqeFl7MZQf1ZN+krlf0nqpWp3lTfSR7Faa+7x8CE9JbFZxn0IT01keOM+hAAMGYzgAAAElofQlXEZxtGCyc5br8kuLJapofAUns1sRJyW9RW590U2vMuhROS3cl3bwWxplJbuS8+BVwWqjoXAVsqOJkpcE3n+GSTZ5HUyfSJOrHo+LSan3bO7xuS/C2Pks+jJfh7OnH0ZVgfVensylH6La8nY+TOUgAA4AAAAAAAAAAAAAAAAAAAAAAAAAAADNgsJOrNU6avJ+SXFvkjAdA1T0V0NJTkv0lRJvnGPCP5v/ovop8SeOnUupq8SWOnU29C6Gp4eOSvN+1N732LkuwlQRumNL08NG83eT3RW9/Bdp7Hw1x7JHqfDCPZIkbnpVKWMx+JW1SjClTe5ys214p377Efj8fpHDNdLO6e57NOUH2XSTT8imWpSW7a8d8Fb1CSzh47l7BBaA1gjiOrJKNVK9uElzj8CcRfCcZrMS2M1JZRAaw6vRrpzppRreSn2S7e0oM4OLcZJpp2ae9NHXioa7aLVvlEFmrKfatyl+XlyMWr06a8SPPqZNTQmt8efUp5taKwTr1YU1ld5vlFZt+Rqlg1Ht8od/wBnK34omCqKlNRZjqipTSZM604v5NQhSo9Xa6qt82EVnZ881n2sopctfaDcaU1ui5RfZtbLX8LKcXaxvxcdsYLdU34mH0PGXfVHTbqfoarvOKvFvfKK4PtXqikmbA4l0qkKi3xafeuK8VdFdNrqmn06+hXTY65ZMumaeziKq+vL1bf5mobel8XGrWnUimlJppO19yWdu41CueNzx3ITxueAACJEAAAAAAAAAAAAAAAAAAAAAAAAAAA3dB4Tpa9OD3OV39mPWfut4nUUULUWnfESfKm/VpfEvx6uhjitvuz09HHEM9zDiayhCU5ezFOT7krlA0anjMYnUzTbk1wUIrKPduXiy1a3zthZ9rivOSuU/V3CTq1XCFV03st7Ub3aTjlk1/5ENVJu2MOa547kNRJuyMefXB0jJLOyXkiF1gxmHlQqQlVhe2STu9tZxslnvNaOqEHnVrVJvwXvublDVfCR/wALa+1Ob9L2NEnbJY2pZ7v7fcvbskmsL3f8HPcPiJU5xnF2lFprw4HV6FTajGXNJ911cw0NH0YexShHuhFPzNs5pqHVnLzkjRS608vIMOJoKpCUJbpJxfc1Yg9PaxPDVFTVJSvFSvtW3tq1rPkR/wDXeX+XX+o/+J2epqi9sn9H9iUtRXF4bKpVpuMnF74txfenZm5oLGqjXhN+ze0vsyyb8N/ga+PxPSVJ1NnZ2m5WvezfaYTx09ssx6cjyk9ssrodYr0YVIOMkpQks1waKbpXVCpG8qD24/RbSku57n6GDQOssqKVOonKnw+lDu5rsLpgdI0qyvSqKXZxXfF5o9TNWpXHn9T0c1Xrjz+pzDE4adN2qQlF/WTRjOt1aUZK0kmuTSa8iu6X1UpzTlQ6k+XzJdlvm+Bns0Mlxg8/qUT0bXGLyUYH1VpyhJxkmpRdmnwZ8GH1MYNvD6Lr1FeFGbXPZsvNlo0HoWnQpfKMSryS2rNXUFwy4yIbH6y4ipJuM3ThwjHfbtlvbNDpjCKdj59EXupQSc3z6LmaOI0XiKavOjNLnZNLvaNMt+qunqk6nQ1pbW0nsydr3SvZ88rmLXHQ0YLp6asm7TS3JvdJcs8n3o7KhOvxK3ldnzOypThvg/mVv5JU39HO32JbvILC1Hupz/BL4E7o/WytFwjNQdNWi7JpqO697l7b5eHIsq00LfyyfyJ1aeFi+GX0OR1Kcou0otPk00/Jnykbek8dUrVHOqkppbNkrJbNzY0NpqeG2tiEZbVr7TfC+63eZMQcsN8O+P2M+I7sZ4d8EZcWOrYDEKrThUtbaipW5XKdrbpicpTw7hFRjKLTu9p2Skny4mm3TRhHc5enD+S+zTqEdzl9Cu06cpO0Ytvkk2/JH08LU/Zz/BL4GXR+PnQn0lO21ZrNXVmX+eltjCrETj1nCL2VucpbkiFFMLE8yxjjy6EKaozTy8YOdVMPOKvKEkubjJK/ezGSmlNO1sRHYmo7O1tJRi73zXPtJjDaGjhsPLEVqaqVUk1B+zC7srri88//ADIxqU29j4Ljlo4qlNva+C6sruF0dWqZ06U5Lmo5ee4+8RojEU1tTozS52ul32NyetGLbuqiiuShC3qmy16s6XliacttJTg7O25prJ24cfItqqpse1N59ETrrqse1N5OeGWhhZzTcUrLfecI2WWfWayzRJ62YONLENQVoyip2W5N3Tt4q/iRdCqoqaa9qGyu/ai/5TPKO2bjLoUuO2WGfXyOpe2w77PScPYtfa7rGElVpWNktl5LYvl/ddGls/jzIo5NRX5WJKK5Fg1Iq2xDX0oSXirP8mX85VonF9FWp1OEZK/2XlL0bOpp3zR6ehlmtx7M36OWYY7EVrRR28LUS3pKX4ZKT9Eyk6uYlUsTTk3k3svukre+x0qpBNNPc00+5nLdKYCVCrKnLhuf0ovcyvWJxlGxENWnGUbEdUPSrat6xxnFU60lGoslJ7prhnwl7y0I3V2RsWYmyE1NZiemGNaLk4qSco70mrq+664EbpnT1KhF9ZSqcIJ53+tyRp6o4WbU8TU9us7r7K49zfokRdq3qC49/Ig7FvUF7+RtaX1ep4ianOc01FR6uzaybfFdpo/1Lo/tKn+z4FoNXHYlUqc6j3RTfe+C87I5KipvdJISqrbcmjmOkqEadWcItuMZOKbtd2y4dpgEpttt72233vNknq3g4VsRGE1eFpNq7V7Lmu2x4sVvlhdWeUlvlhdSMEW07ptNcU7NeJmxtLYq1IWyjOUfBSaRhItccEWsMnNG6016TSm+khyk+su6XxuXbRmkKdeG3TeW5p74vk0ctJzUzFOGIUb9WonF98U5J+j8zbptRJSUZPKf0NWn1ElJRk8okNe8Gk4Vks31JduXVfv9CE1cwyq4mnFrJPafdFX99i1a8/q8f3kfdIgtSX/afuy/JnbYL8SvPH9+h22C/EL2LRrJOh0ShiKkoQk17CbbaztueRWPk2jP21X8Mv8AgS2vsP0VN8FNrzi/gUo7qrcWtOKfqjuosxZhpP1LPgZaNpVI1I1ajlHNXjO17W4RRIaY1hwtShUhGTblFpLYqLrcM2udikApWplFOKSXt/JUtRJJpJY/vmeHRtVcb0uHjf2odR/d3eljnRYtSMZsVnTbyqLL7cc16X8kNHPZZjvwGlntsx34GlrThejxM+Uuuvvb/W5o6Pwrq1YU185pdy3t+CuWrXzC3jTqpbm4Puea9U/M09U6apU6uLmsoJxj2vjb/avFkp0/53F8uftzOyq/zOPTn7cyzYHH0+mnhoq3RRjbxya8Or5lc17wlqkKq3SWy++Oa9H6ETobSDhiY1ZP2pPbfZN5++/gXTWvCdJhp2WcLTX3d/pc0b/Hpl5f9Ro3eNVL++hQdG4R1asKa+dJJ9kd8n5Jlg13xq2oUI+zBbTXa1aK8F7z51KoKPS4ifswi0n4Xk/JLzK9jcS6tSVSW+Tb7uS8FZeBkzsp85fojN+Sn/1+iPMHVUKkJtXUZRk1zSabLRrBrJSq0XSpbTcrJtqySvd97yKkbGBwVStLZpwcnx5Jc29yIV2TinGPX5kK7JxTjHqa5b//AJ//AI33P5jSqaJw+GSeKqbc96pU7rzlvt5eJOaqaS6bpFGnGnThs7MY8L7V7vi8kaNPVttW58e3N8uvRF1Fe2xbufbr79EQevX6xH93H+KRXiw69frEf3a/ikV4o1H+2XqVX/7JAAFJSC86n6XVSHQzfXgsvrQ4eK3eRRj6o1ZQkpwbUou6a4MupudUs/MtqtdcsnXSN01oiniYbMspL2ZLfF/muw0tAaxQrpRm1Gry4T7Y/Anz2E4Wx7pnqpxsj3TOcYzVjEweUNtc4Ne55mGnofGeyqVRLlfZXq7HTQZnoK85TZnejhng2UzQ+qLupYhqyz2E73+0+XYi4xjZWR9A01VRrWImiuqNaxEFJ100upPoIPKLvN85LdHw399uRt6xazKKdOhK89zmt0fsvi/cUpsxavUrGyPv9vuZNTesbI+/2PSwajQviG+UJesoor5K6B0qsN0ktluco2jusnfj2bvIyUSUbE5cjLS0rE2b2uejHCp08V1J+19We71XrcrhbdG60QqRdPFxVnltbN4tfWjw716HtfVSjV62GrrZfDKaXdJO/ncuspVr31cc811Lp1Kx7q+Pl1KiTWqGFc8TGSWUE5N96aS836MkKWpck71K8VH6sHfze42q+lsNg6bp4a059jbW1znLj3L0OV0OElO3gkcrpcGpWcEjU17xqcoUU/Z60u95JeV/Mg9CYxUa9Oo/ZTs/syVm/W/galarKcnKTvKTu2+LZ8lM7XKzeVTtcrN50/TGBVejKnfNq8Xyks0+74nMq1KUJOE4tSTs0+BaNW9ZVCKpV29lZRnvsuCl8SwYjC4bFJN7E+Uoy6y8U7+BushHUpSg+Pb9jZOEdQt0XxOaElonRDrRnUlLYpQi25tbSbXBcy11NA4Gj1qlrL6dSVvLiQGsGnlVSo0Y7NFdltq27LhHsMzoVXGxr0XUzulV8bH7dyBMmHrunOM474tSXenc+AZTPyOk6UpLE4WShntxUo/aylH1yK3rNNUaNLCRe5Kc7cXv9ZXfgiT1M0gnQlCTt0V3n+zd3fwe0U/SeMdarOo/nPLsiskvKx6OotTrUlzkse3U232JwUlzksfc1mdM0FilXw8JPNuOzLvXVfnv8TmhbNQ8ZZzot7+vHvWUv5fIp0VmLMdyvSTxPHc90/FYXCxw0XnNtt84p3f8qKkSmsuN6bESafVj1I90d78Xciyq+SlNpclwXt/JVdJOXDkuCPGjpuCwkcLQais4xcpP6Ukrts5lc6lo7HU69NSi0011lxTtmmjToMZffp+5o0eMvucwq1ZTk5zd5Sd23xbLbqBF2rO2V4K/atq/vXmfGP0Bg6UtqpXcY79hNOXcuNj50drHTjVjTjFU8NZxXPae6cn4epCqvwrE7Gv1/wCEaoeFYnNmvr2v7RH92v4pFcOlaW0Zh66jOq8o7pKdlsvm+RRtO1qMqtqEFGnFKN189rj/AN8bDVUuMnNvny7nNTU4ycm+ZHgAxmUAAA8JvR2tGIpWUmqkeU7prulv87kKCcJyg8xeCUZyi8xeC8UNcqL9uE4vs6y+PobT1swn05f6dT4HPQaFrbV2+RoWrs8i6YnXOmv7ulKT+s1Fel2V7SWnq9e6lLZg/mwyT73vZGArnqLJ8Gyud9k+DYABQUgAAA8StuPQAJSb3tvvbYAAAAAB87J9AA8segAAAAHlz0AYAPEz0AAAAA8PQAeHoAB87J9AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAGbB4SdWWzBJuzebSyVufejfer9db1BffX0lHhnvZGUqsou8ZOL3XTadvA2JaSru160svrS57XPPMnHZj4k/YnFwx8SZs1dB1o2T2LttW21laMptt7krJ8THidDVoQc5RSjG1+tFvNpbl2uxh/pGte/TTvz253958VMZVknGVSbTtdOUmna1rpvsXkdbqxwTOt19EzCACsrAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP//Z" alt="esewa">
  </div>
    </div>
</div>