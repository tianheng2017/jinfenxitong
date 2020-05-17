<style>
.pagination2 li {
    font-size: 1rem;
    float: left;
    padding: 0 0px;
    line-height: 30px;
    margin: 0 5px;
    border-radius: 1px;
    text-align: center;
	border: 1px solid #a2a2a2;
}
.pagination2 li a {
    padding: 0 5px;
}
</style>

<{if !$pagenum}>
<div class="collection-item datanonetxt">已无更多数据！</div>
<{/if}>



<div class="col s12 paginationdiv">
	<ul class="pagination pagination2">
		<{if $pallnum>10}>
		<li class="active" style="background-color: #ff62b1;"><a href="<{INSTALL_DIR}>/<{$WsCtrlClass}>/<{$pagesign}>/page/1<{$pagehrefadd}>">1</a></li>
		<{/if}>
		
		<{if $page<=1}>
		<li class="disabled"><a href="#!"><i class="mdi-navigation-chevron-left"></i></a></li>
		<{else}>
		<li class="waves-effect"><a href="<{INSTALL_DIR}>/<{$WsCtrlClass}>/<{$pagesign}>/page/<{$page-1}><{$pagehrefadd}>"><i class="mdi-navigation-chevron-left"></i></a></li>
		<{/if}>
		<{for $fooi=$pallnums to $pallnume}>
		<li class="<{if $fooi==$page}>active<{else}>waves-effect<{/if}>"><a href="<{INSTALL_DIR}>/<{$WsCtrlClass}>/<{$pagesign}>/page/<{$fooi}><{$pagehrefadd}>"><{$fooi}></a></li>
		<{/for}>
		<{if $pallnum<=$page}>
		<li class="disabled"><a href="#!"><i class="mdi-navigation-chevron-right"></i></a></li>
		<{else}>
		<li class="waves-effect"><a href="<{INSTALL_DIR}>/<{$WsCtrlClass}>/<{$pagesign}>/page/<{$page+1}><{$pagehrefadd}>"><i class="mdi-navigation-chevron-right"></i></a></li>
		<{/if}>
		
		<{if $pallnum>10}>
		<li class="active" style="background-color: #ff62b1;"><a href="<{INSTALL_DIR}>/<{$WsCtrlClass}>/<{$pagesign}>/page/<{$pallnum}><{$pagehrefadd}>"><{$pallnum}></a></li>
		<{/if}>
		
		<li><input style="width: 4em;font-size: 12px;height: 2em;margin: 0;" class="selpagev" value="" placeholder="页码" type="text"></li>
			
		<li class="active selpagebtn" id="selpagebtn" style="background-color: #ff62b1;"><a href="javascript:;">跳转</a></li>
		<li style="color: #686868;border: none;">共<{$dallnumcount}>条数据</li>
	</ul>

</div>