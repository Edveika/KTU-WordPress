const i=r=>(r||document.location.search).replace(/(^\?)/,"").split("&").map((function(n){return n=n.split("="),this[n[0]]=n[1],this}).bind({}))[0],u=(r,n)=>{n=n||document.location.href;const t=n.split("#"),o=t[0].split("?");if(2>o.length)return n;const a=encodeURIComponent(r)+"=",s=o[1].split(/[&;]/g);for(let e=s.length;0<e--;)s[e].lastIndexOf(a,0)!==-1&&s.splice(e,1);const c=t[1]?"#"+t[1]:"",l=o[0]+(0<s.length?"?"+s.join("&"):"")+c;window.history.replaceState(null,null,l)},p=(r,n)=>{const t=new URL(window.location.href),o=t.searchParams;o.delete(r),o.append(r,n),t.search=o.toString(),window.history.replaceState(null,null,t.toString())};export{p as a,i as g,u as r};