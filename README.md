# Apikontor-Service
Apikontor.com PHP Service

<h3>Kullanımı</h3>

<span>Sayfaya Apikontor kütüphanesini dahil ediniz, kullandığınız framework'e göre değişebilir. Yada Apikontor::FUNCTION_NAME olarak dahil edebilirsiniz</span>

<b>Fiyatları Listeleme</b>

<pre><?php
echo Apikontor::fiyatlar();
?></pre>

<b>Talimat Gönderme</b>

<br />

<code><?php
echo Apikontor::talimat('sms','vodafone','79','5XXXXXXXXX','1234567');
?></code>

<div class="highlight highlight-js"><pre>grunt.<span class="pl-c1">initConfig</span>({
  pkg<span class="pl-k">:</span> grunt.<span class="pl-c1">file</span>.<span class="pl-c1">readJSON</span>(<span class="pl-s"><span class="pl-pds">'</span>package.json<span class="pl-pds">'</span></span>),
  readme_generator<span class="pl-k">:</span> {
    my_generator <span class="pl-k">:</span> { <span class="pl-c">//Thank you @JFusco</span>
      options<span class="pl-k">:</span> {
        <span class="pl-c">// Task-specific options go here.</span>
        <span class="pl-c">// detailed explanation is under options</span>
        <span class="pl-c">// Default options:</span>
        readme_folder<span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">"</span>readme<span class="pl-pds">"</span></span>,
        output<span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">"</span>README.md<span class="pl-pds">"</span></span>,
        table_of_contents<span class="pl-k">:</span> <span class="pl-c1">true</span>,
        toc_extra_links<span class="pl-k">:</span> [],
        generate_changelog<span class="pl-k">:</span> <span class="pl-c1">false</span>,
        changelog_folder<span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">"</span>changelogs<span class="pl-pds">"</span></span>,
        changelog_version_prefix<span class="pl-k">:</span> <span class="pl-c1">null</span>,
        changelog_insert_before<span class="pl-k">:</span> <span class="pl-c1">null</span>,
        banner<span class="pl-k">:</span> <span class="pl-c1">null</span>,
        has_travis<span class="pl-k">:</span> <span class="pl-c1">true</span>,
        github_username<span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">"</span>aponxi<span class="pl-pds">"</span></span>,
        travis_branch<span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">"</span>master<span class="pl-pds">"</span></span>,
        generate_footer<span class="pl-k">:</span> <span class="pl-c1">true</span>,
        generate_title<span class="pl-k">:</span> <span class="pl-c1">true</span>,
        package_title<span class="pl-k">:</span> <span class="pl-c1">null</span>,
        package_name<span class="pl-k">:</span> <span class="pl-c1">null</span>,
        package_desc<span class="pl-k">:</span> <span class="pl-c1">null</span>,
        informative<span class="pl-k">:</span> <span class="pl-c1">true</span>,
        h1<span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">"</span>#<span class="pl-pds">"</span></span>,
        h2<span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">"</span>##<span class="pl-pds">"</span></span>,
        back_to_top_custom<span class="pl-k">:</span> <span class="pl-c1">null</span>
      },
      order<span class="pl-k">:</span> {
        <span class="pl-c">// Title of the piece and the File name goes here</span>
        <span class="pl-c">// "Filename" : "Title"</span>
        <span class="pl-s"><span class="pl-pds">"</span>installation.md<span class="pl-pds">"</span></span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">"</span>Installation<span class="pl-pds">"</span></span>,
        <span class="pl-s"><span class="pl-pds">"</span>usage.md<span class="pl-pds">"</span></span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">"</span>Usage<span class="pl-pds">"</span></span>,
        <span class="pl-s"><span class="pl-pds">"</span>options.md<span class="pl-pds">"</span></span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">"</span>Options<span class="pl-pds">"</span></span>,
        <span class="pl-s"><span class="pl-pds">"</span>example.md<span class="pl-pds">"</span></span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">"</span>Example<span class="pl-pds">"</span></span>,
        <span class="pl-s"><span class="pl-pds">"</span>output.md<span class="pl-pds">"</span></span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">"</span>Example Output<span class="pl-pds">"</span></span>,
        <span class="pl-s"><span class="pl-pds">"</span>building-and-testing.md<span class="pl-pds">"</span></span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">"</span>Building and Testing<span class="pl-pds">"</span></span>,
        <span class="pl-s"><span class="pl-pds">"</span>legal.md<span class="pl-pds">"</span></span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">"</span>Legal Mambo Jambo<span class="pl-pds">"</span></span>
      }
    }
  }
})</pre></div>
