<div class="row">
  <div class="col-sm-8">
  <!-- -->
   <div><h4 class="font-red"><b>How Web Browsers and Web Servers work?</b></h4></div>
   <div class="list-group">
     <div class="list-group-item">
        <b><i>Web Browser</i></b> is a Client(User)-side Software where it communicates with Web Server to 
        access Web pages based on user Requests. The Communication between Web-browser and Web-server 
        happens using HTTP (Hypertext Transfer Protocol) and HTTPS (Hypertext Transfer Protocol Secure) 
        Protocols.<br/>
        <b><i>Web Server</i></b> is a Server-side Software that stores webpages. When a User from 
        Web Browser requests a webpage, it processes and delivers Web pages to the Web Browser.
        
     </div><!--/.list-group-item -->
   </div><!--/.list-group -->
   <div>
     Each Web Server consists of a protocol, domain Name and a port number. Web server is also called as Origin, 
     when dealing with multiple Web servers.<br/> Origin is mentioned in the format of 
     <code>&lt;protocol&gt;://&lt;domain Name&gt;:&lt;port number&gt;</code>
   </div>
   <div>
      <b><i>Protocol</i></b><br/>
      Protocol is a Standard Set of Rules that obeyed and followed by two-parties (Sender and Receiver)
       to communicate so that third-party can't involve, interrupt and tamper the Communication.<br/>
      Web Server and Web Browser are communicated only by two protocols - HTTP (Hypertext Transfer 
      Protocol) and HTTPS (Hypertext Transfer Protocol Secure) Protocols.<br/>
      At a time, one Web server can stick only to one protocol either <code>http</code> or 
      <code>https</code>.<br/>
      By default, web servers protocols are <code>http</code>. They can be customized and can be update 
      to <code>https</code>.
   </div>
   <div>
      <b><i>Domain Names</i></b><br/>
      The Communication between Computers (Web Browser or Web Server) happen daily over an Internet. 
      Each Computer is identified by other Computer based on IP Address (Number Format ) which could 
      be difficult to the human to remember, identify and communicate with it as there are millions 
      of Computers connected over an Internet.<br/>
      To resolve this Issue, domain Names got introduced.<br/>
      Domain Name is a unique Website Address given to a Web Server.<br/>
      Example:<br/> 
      <code>www.google.com</code> is a domain Name for Google's Web Server.<br/>
      <code>www.yahoo.co.in</code> is a domain Name for Yahoo's Web Server.
   </div>
   <div>
      <b><i>Port Number</i></b><br/>
      Port is a Socket Plug point of a computer that physically connected to some other Device. 
      A Computer consists of One or more Serial ports and usually one Parallel port.<br/>
      In a Network, port Number is 16-bit unsigned integer that ranging from 0 to 65535.<br/>
      The default port for<br/>
      <code>HTTP (Hypertext Transfer Protocol)</code> is <code>80</code><br/>
      <code>HTTPS (Hypertext Transfer Protocol Secure)</code> is <code>443</code>
   </div>
   <div class="mtop15p">
    Many Web Server are available in the Market. Few of them are Open-Source (Free to Use 
    and Customize).  <code>Glass Fish Web Server</code> and <code>Apache Tomcat Web Server</code> 
    are the Java Web Servers. <code>Wamp Server</code> and <code>Xamp Server</code> are the 
    PHP Web Servers.<br/>
    This Web Servers can be installed in the Desktops / Laptops also and you can turn the Computer 
    into a Hosting Point. This could be good if you have only 40-50 Users who visits your website.
    If the users are more than that, hosting your site in Web Servers is good.
   </div>
   <div class="table-responsive">          
    <table class="table">
      <thead>
        <tr>
          <th>Web Server Software</th>
          <th>Protocol (Default)</th>
          <th>Domain (Default)</th>
          <th>Port Number (Default)</th>
          <th>Origin</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Glass Fish Server</td>
          <td>http</td>
          <td>localhost</td>
          <td>8080</td>
          <td>http://localhost:8080</td>
        </tr>
        <tr>
          <td>Apache Tomcat</td>
          <td>http</td>
          <td>localhost</td>
          <td>8080</td>
          <td>http://localhost:8080</td>
        </tr>
        <tr>
          <td>Wamp Server</td>
          <td>http</td>
          <td>localhost</td>
          <td>80</td>
          <td>http://localhost:80</td>
        </tr>
        <tr>
          <td>Xamp Server</td>
          <td>http</td>
          <td>localhost</td>
          <td>80</td>
          <td>http://localhost:80</td>
        </tr>
      </tbody>
    </table>
   </div>
   <div class="list-group mtop15p">
    <div class="list-group-item bg-lgtGrey">
      <b>Note</b><br/>
      When you are using http protocol, the default port is 80. You can mention Origin as
      <code>http://localhost</code> instead of <code>http://localhost:80</code>.<br/>
      Similarly, for https, the default port is 443.<br/> You can mention Origin as
      <code>https://localhost</code> instead of <code>https://localhost:443</code>.<br/>
      Therefore, for the domains<br/>
      <code>http://www.google.co.in/</code> - <span class="label label-primary">Port is 80</span><br/>
      <code>https://www.google.co.in/</code> - <span class="label label-warning">Port is 443</span><br/>
      The port Number should be mentioned only when it is running on other ports for the respective 
      protocols. for example, Apache Tomcat Server is running on 8080.<br/>
      There Origin URL is mentioned as 
      <code>http://&lt;domain Name&gt;:8080</code>
    </div><!--/.list-group-item -->
   </div><!--/.list-group -->
  <!-- -->
  </div><!--/.col-sm-8 -->
  <div class="col-sm-4">
    
  </div><!--/.col-sm-4 -->
</div><!--/.row -->