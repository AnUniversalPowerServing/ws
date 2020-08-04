<script type="text/babel">
ReactDOM.render(<ContentMenu data={pageContent} 
                             selectMenuId="seo-fundamentals" 
                             selectSubMenuId="how-search-engine-works"/>, 
                             document.getElementById('content'));
</script>
<div><h4 class="font-red"><b>How Search Engine works?</b></h4></div>
<div>
 To deliver better Search Results, Search Engine performs few Activities:
 <ol class="noListStyle">
  <li>
    <div><b>Stage #1: Crawling</b></div>
    <div>
     It is a process of fetching all the web page links under a website. This task was done by 
     a software called <i>crawler</i> or <i>spider</i>.
     For Google Search Engine, this software is known as Googlebot. This Software runs by the 
     Search Engine with a periodical Frequency (Daily or Weekly) for updating existing Websites and fetching new Websites.
    </div>
  </li>
  <li>
    <div><b>Stage #2: Indexing</b></div>
    <div>
     From the Fetched Web links, for each webpage, it identifies the words and expressions.
     Then, in the Search Engine's Big Database, index is created for Web link with keywords.
    </div>
  </li>
  <li>
    <div><b>Stage #3: Processing</b></div>
    <div>
     When the search Request comes in the Search Engine, based on the keywords it fetches the 
     Web links.
    </div>
  </li>
  <li>
    <div><b>Stage #4: Calculating Relevancy (Ranking)</b></div>
    <div>
     In Stage #3, for a Searched String, we could collect Millions of Weblinks. Now, the Search 
     Engine calculates the Relevancy and display the results in ranking Order. 
    </div>
  </li>
 </ol>
</div>