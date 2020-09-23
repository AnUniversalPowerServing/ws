<script type="text/babel">
ReactDOM.render(<ContentMenu data={pageContent} 
                             selectMenuId="networking-basics" 
                             selectSubMenuId="dns-ipAddress-url" />, 
                document.getElementById('content'));
</script>
<div class="row">
 <div class="col-sm-7">
   <!-- -->
   <div><h1 class="font-red"><b>DNS, IP Address and URL</b></h1></div>
   <div>IP Address is the Unique Identification Number given to a System in a Network.</div>
   <div>IP Address of a particular System can be known by using a command <code>ipconfig</code> 
   in the Command Prompt.
   </div>
<div class="mtop15p mbot15p">
<pre class="code">
<code class="js">C:\Windows\System32> ipconfig</code>
</pre>
</div>  
   <div>
   The Command results:
   </div>
<div class="mtop15p mbot15p">
<pre class="code">
<code class="js">Windows IP Configuration
Wireless LAN adapter WiFi:
   Connection-specific DNS Suffix  . :
   Link-local IPv6 Address . . . . . : fe80::34de:61b9:3382:aaa3%16
   IPv4 Address. . . . . . . . . . . : 192.168.186.238
   Subnet Mask . . . . . . . . . . . : 255.255.255.0
   Default Gateway . . . . . . . . . : 192.168.1.1
</code>
</pre>
</div>
   <div class="list-group">
    <div class="list-group-item bg-lgtSkyBlue">
     <div><i>IPv4 Address</i> of the System is <b>192.168.186.238</b> where:</div>
     <div><b>192 - </b> Service Name</div>
     <div><b>168 - </b> Server Machine</div>
     <div><b>186 - </b> Directory Name / Directory Code in the Server</div>
     <div><b>238 - </b> File code / File Name in the Server Directory</div>
    </div><!--/.list-group-item -->
   </div><!--/.list-group -->
 </div><!--/.col-sm-7 -->
 <div class="col-sm-5">
 <!-- -->
  <div class="list-group">
   <div class="list-group-item bg-lgtSkyBlue">
    <div><h4><b>Protocols</b></h4></div>
    <div>
    In a Network, Set of rules and procedure followed in establishing a connection and communicating 
    over it, is called as a protocol.
    </div>
    <div><h4><b>List of protocols</b></h4></div>
    <div>
     <ol>
      <li>
        <div><b>Hyper Text Transfer Protocol (HTTP)</b></div>
        <div>It is a protocol used to communicate between Web-Browser and the Web-Server.</div>
      </li>
      <li>
        <div><b>Secure Hyper Text Transfer Protocol (HTTP)</b></div>
        <div>It is a protocol used to communicate securely between Web-Browser and the Web-Server.</div>
      </li>
      <li>
        <div><b>Secure Sockets Layer (SSL)</b></div>
        <div>It is a protocol used in encryption of data for secure transmission of data.</div>
      </li>
      <li>
        <div><b>Simple Mail Transfer Protocol (SMTP)</b></div>
        <div>It is a protocol used to transfer Emails.<div>
      </li>
      <li>
        <div><b>Internet Message Access Protocol (IMAP)</b></div>
        <div>It is a protocol used to store and retreive Emails.<div>
      </li>
      <li>
        <div><b>Post Office Protocols (POP2, POP3)</b></div>
        <div>These are the protocols used to download Emails.<div>
      </li>
      <li>
        <div><b>File transfer Protocol (FTP)</b></div>
        <div>It is a protocol used in File Transmissions over a Network.<div>
      </li>
      <li>
        <div><b>Network Time protocol (NTP)</b></div>
        <div>It is a protocol used in Time Synchronization.<div>
      </li>
      <li>
        <div><b>Dynamic Host Configuration Protocol (DHCP)</b></div>
        <div>It is a protocol used to allocate the Dynamic IP Addresses.<div>
      </li>
      <li>
        <div><b>Simple Network Management Protocol (SNMP)</b></div>
        <div>It is a protocol used in Computer Network Administration.<div>
      </li>
      <li>
        <div><b>Light Weight Directory Access Protocol (LDAP)</b></div>
        <div>It is a protocol used in Authenticating and providing Access to the Users over a Network.<div>
      </li>
      <li>
        <div><b>Internet Control Message Protocol (ICMP)</b></div>
        <div>It is a protocol used in Error-handling in the Network.<div>
      </li>
      <li>
        <div><b>Address Resoluton Protocol (ARP)</b></div>
        <div>It is a protocol used to determine the hardware address of a Network by using IP Address.<div>
      </li>
      <li>
        <div><b>Boot Protocol (BOOTP)</b></div>
        <div>It is a protocol used to start or boot the computers in a Network.<div>
      </li>
      <li>
        <div><b>Point-to-Point Tunneling Protocol (PPTP)</b></div>
        <div>It is a protocol used to set connection between Private Networks.<div>
      </li>
      <li>
        <div><b>Telnet</b></div>
        <div>It is a protocol used to provide remote services (provides remote login).<div>
      </li>
      <li>
        <div><b>Gopher</b></div>
        <div>It is a protocol used in distributing, searching, and retrieving documents 
        in the Network.<div>
      </li>
      <li>
        <div><b>Daytime Protocol</b></div>
        <div>It is a protocol used to provide Date and Time Services.<div>
      </li>
     </ol>
    </div>
   </div><!--/.list-group-item -->
  </div><!--/.list-group -->
 <!-- -->
 </div><!--/.col-sm-5 -->
</div><!--/.row -->