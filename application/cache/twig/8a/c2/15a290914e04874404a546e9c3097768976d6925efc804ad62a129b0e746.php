<?php

/* list-tugas.html */
class __TwigTemplate_8ac215a290914e04874404a546e9c3097768976d6925efc804ad62a129b0e746 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout-private.html");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout-private.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "Tugas - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"module\">
    <div class=\"module-head\">
        <h3>Tugas</h3>
    </div>
    <div class=\"module-body\">
        ";
        // line 13
        echo get_flashdata("tugas");
        echo "

        <div class=\"bs-callout bs-callout-info\">
            ";
        // line 16
        if ((is_siswa() == false)) {
            // line 17
            echo "            <div class=\"btn-group pull-right\" style=\"margin-top:-5px;\">
                <!-- ";
            // line 18
            echo anchor("tugas/add/3", "Tambah Tugas Ganda", array("class" => "btn btn-primary"));
            echo " -->
                ";
            // line 19
            echo anchor("tugas/add/2", "Tambah Tugas", array("class" => "btn btn-primary"));
            echo "
                ";
            // line 20
            echo anchor("tugas/add/1", "Tambah Tugas Upload", array("class" => "btn btn-primary"));
            echo "
            </div>
            ";
        }
        // line 23
        echo "            <b><a class=\"as-link\" data-toggle=\"collapse\" data-target=\"#form-filter\"><i class=\"icon-search\" style=\"line-height: 0px;\"></i> PARAMETER PENCARIAN</a></b>

            <div id=\"form-filter\" class=\"collapse\" style=\"margin-top: 5px;\">
                ";
        // line 26
        echo form_open("tugas");
        echo "
                    <table class=\"table table-condensed\">
                        <tr>
                            <th  style=\"border-top: none;\">Mapel</th>
                            <td  style=\"border-top: none;\">
                                <ul class=\"unstyled inline\" style=\"margin-left: -5px;\">
                                    ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mapel"]) ? $context["mapel"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 33
            echo "                                    <li>
                                        <label class=\"checkbox inline\">
                                            <input type=\"checkbox\" name=\"mapel_id[]\" value=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id"), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, set_checkbox("mapel_id[]", $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id"), ((((!twig_test_empty($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "mapel_id"))) && in_array($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id"), $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "mapel_id")))) ? (true) : (""))), "html", null, true);
            echo "> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "nama"), "html", null, true);
            echo "
                                        </label>
                                    </li>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                                </ul>
                            </td>
                        </tr>
                        ";
        // line 42
        if ((is_siswa() == false)) {
            // line 43
            echo "                        <tr>
                            <th>Kelas</th>
                            <td>
                                <ul class=\"unstyled inline\" style=\"margin-left: -5px;\">
                                    ";
            // line 47
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["kelas"]) ? $context["kelas"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
                // line 48
                echo "                                    <li>
                                        <label class=\"checkbox inline\">
                                            <input type=\"checkbox\" name=\"kelas_id[]\" value=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "id"), "html", null, true);
                echo "\" ";
                echo twig_escape_filter($this->env, set_checkbox("kelas_id[]", $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "id"), ((((!twig_test_empty($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "kelas_id"))) && in_array($this->getAttribute((isset($context["k"]) ? $context["k"] : null), "id"), $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "kelas_id")))) ? (true) : (""))), "html", null, true);
                echo "> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "nama"), "html", null, true);
                echo "
                                        </label>
                                    </li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "                                </ul>
                            </td>
                        </tr>
                        ";
        }
        // line 58
        echo "                        <tr>
                            <th>Tipe</th>
                            <td>
                                <ul class=\"unstyled inline\" style=\"margin-left: -5px;\">
                                    <li>
                                        <label class=\"checkbox inline\">
                                            <input type=\"checkbox\" name=\"type[]\" value=\"3\" ";
        // line 64
        echo twig_escape_filter($this->env, set_checkbox("type[]", "3", ((((!twig_test_empty($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "type"))) && in_array("3", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "type")))) ? (true) : (""))), "html", null, true);
        echo "> Ganda
                                        </label>
                                    </li>
                                    <li>
                                        <label class=\"checkbox inline\">
                                            <input type=\"checkbox\" name=\"type[]\" value=\"2\" ";
        // line 69
        echo twig_escape_filter($this->env, set_checkbox("type[]", "2", ((((!twig_test_empty($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "type"))) && in_array("2", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "type")))) ? (true) : (""))), "html", null, true);
        echo "> Essay
                                        </label>
                                    </li>
                                    <li>
                                        <label class=\"checkbox inline\">
                                            <input type=\"checkbox\" name=\"type[]\" value=\"1\" ";
        // line 74
        echo twig_escape_filter($this->env, set_checkbox("type[]", "1", ((((!twig_test_empty($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "type"))) && in_array("1", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "type")))) ? (true) : (""))), "html", null, true);
        echo "> Upload
                                        </label>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <th width=\"15%\">Judul</th>
                            <td>
                                <input type=\"text\" name=\"judul\" class=\"span4\" value=\"";
        // line 83
        echo twig_escape_filter($this->env, set_value("judul", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "judul")), "html", null, true);
        echo "\">
                            </td>
                        </tr>
                        <tr>
                            <th>Info</th>
                            <td>
                                <input type=\"text\" name=\"info\" class=\"span5\" value=\"";
        // line 89
        echo twig_escape_filter($this->env, set_value("info", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "info")), "html", null, true);
        echo "\">
                            </td>
                        </tr>
                        ";
        // line 92
        if ((is_pengajar() == false)) {
            // line 93
            echo "                        <tr>
                            <th>Pembuat</th>
                            <td>
                                <input type=\"text\" name=\"pembuat\" class=\"span4\" value=\"";
            // line 96
            echo twig_escape_filter($this->env, set_value("pembuat", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "pembuat")), "html", null, true);
            echo "\">
                            </td>
                        </tr>
                        ";
        }
        // line 100
        echo "                        <tr>
                            <th>Status</th>
                            <td>
                                <ul class=\"unstyled inline\" style=\"margin-left: -5px;\">
                                    <li>
                                        <label class=\"checkbox inline\">
                                            <input type=\"checkbox\" name=\"status[]\" value=\"1\" ";
        // line 106
        echo twig_escape_filter($this->env, set_checkbox("status[]", "1", ((((!twig_test_empty($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "status"))) && in_array("1", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "status")))) ? (true) : (""))), "html", null, true);
        echo "> Terbit
                                        </label>
                                    </li>
                                    <li>
                                        <label class=\"checkbox inline\">
                                            <input type=\"checkbox\" name=\"status[]\" value=\"0\" ";
        // line 111
        echo twig_escape_filter($this->env, set_checkbox("status[]", "0", (((($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "status") != "") && in_array("0", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "status")))) ? (true) : (""))), "html", null, true);
        echo "> Tutup
                                        </label>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <button type=\"submit\" class=\"btn btn-primary\">Filter</button>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>

        </div>

        <br>

        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th width=\"7%\">No</th>
                    <th>Informasi Tugas</th>
                    <th width=\"15%\">Tipe Tugas</th>
                    <th width=\"15%\"></th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 141
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tugas"]) ? $context["tugas"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["no"] => $context["m"]) {
            // line 142
            echo "                <tr ";
            echo ((((is_siswa() && ($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "aktif") == 1)) && (sudah_ngerjakan($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id"), get_sess_data("user", "id")) == false))) ? ("class=\"success\"") : (""));
            echo ">
                    <td><b>
                        <!-- ";
            // line 144
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id"), "html", null, true);
            echo " -->
                        ";
            // line 145
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
            echo "
                    </b></td>
                    <td>
                        <strong class=\"text-warning\">";
            // line 148
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "judul"), "html", null, true);
            echo "</strong>
                        <br><small><b>";
            // line 149
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "mapel"), "nama"), "html", null, true);
            echo "</b>

                        ";
            // line 151
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "tugas_kelas"));
            foreach ($context['_seq'] as $context["_key"] => $context["mk"]) {
                // line 152
                echo "                            , ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mk"]) ? $context["mk"] : null), "nama"), "html", null, true);
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mk'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
            echo "
                        ";
            // line 155
            if ((($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "type_label") == "Ganda") || ($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "type_label") == "Essay"))) {
                // line 156
                echo "                            , ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "durasi"), "html", null, true);
                echo " Menit
                        ";
            }
            // line 158
            echo "
                        </small>
                        <br><small><b>Pembuat : </b> <a href=\"";
            // line 160
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "pembuat"), "link_profil"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "pembuat"), "nama"), "html", null, true);
            echo "</a>, ";
            echo twig_escape_filter($this->env, tgl_jam_indo($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "tgl_buat")), "html", null, true);
            echo "</small>
                        ";
            // line 161
            if ((is_siswa() && ($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "info") != ""))) {
                // line 162
                echo "                            <hr style=\"margin-top: 5px;margin-bottom: 5px;border:none;border-bottom: 1px dashed black;\">
                            ";
                // line 163
                echo $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "info");
                echo "
                        ";
            }
            // line 165
            echo "                    </td>
                    <td>
                        ";
            // line 167
            if (($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "type_label") == "Ganda")) {
                // line 168
                echo "                            <span class=\"label label-success\">Ganda</span>
                        ";
            } elseif (($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "type_label") == "Essay")) {
                // line 170
                echo "                            <span class=\"label label-info\">Essay</span>
                        ";
            } elseif (($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "type_label") == "Upload")) {
                // line 172
                echo "                            <span class=\"label label-warning\">Upload</span>
                        ";
            }
            // line 174
            echo "                    </td>
                    <td>
                        <div class=\"btn-group\">
                        ";
            // line 177
            if ((is_siswa() == false)) {
                // line 178
                echo "                            ";
                if ((($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "type_label") == "Ganda") || ($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "type_label") == "Essay"))) {
                    // line 179
                    echo "                                ";
                    echo anchor(("tugas/manajemen_soal/" . $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id")), "<i class=\"icon icon-tasks\"></i> Soal", array("class" => "btn btn-primary btn-small"));
                    echo "
                            ";
                }
                // line 181
                echo "                            ";
                if (($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "aktif") == 0)) {
                    // line 182
                    echo "                                ";
                    echo anchor((("tugas/terbitkan/" . $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id")) . "/"), "<i class=\"icon-ok\"></i> Terbitkan", array("class" => "btn btn-success btn-small"));
                    echo "
                            ";
                } elseif (($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "aktif") == 1)) {
                    // line 184
                    echo "                                ";
                    echo anchor((("tugas/tutup/" . $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id")) . "/"), "<i class=\"icon-minus\"></i> Tutup", array("class" => "btn btn-danger btn-small"));
                    echo "
                            ";
                }
                // line 186
                echo "
                            
                            ";
                // line 188
                echo anchor((("tugas/edit/" . $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id")) . "/"), "<i class=\"icon-edit\"></i> Edit", array("class" => "btn btn-default btn-small"));
                echo "
                            ";
                // line 189
                if (($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "type_id") == 3)) {
                    // line 190
                    echo "                                ";
                    echo anchor(("tugas/nilai/" . $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id")), "<i class=\"icon-eye-open\"></i> Lihat Nilai", array("class" => "btn btn-info btn-small"));
                    echo "
                            ";
                } else {
                    // line 192
                    echo "                                ";
                    echo anchor(("tugas/koreksi/" . $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id")), "<i class=\"icon-check\"></i> Koreksi", array("class" => "btn btn-info btn-small"));
                    echo "
                            ";
                }
                // line 194
                echo "                        ";
            } elseif ((is_siswa() == true)) {
                // line 195
                echo "                            ";
                if (($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "aktif") == 1)) {
                    // line 196
                    echo "                                ";
                    if ((sudah_ngerjakan($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id"), get_sess_data("user", "id")) == false)) {
                        // line 197
                        echo "                                    ";
                        echo anchor(("tugas/kerjakan/" . $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id")), "<i class=\"icon-ok-sign\"></i> Mulai Kerjakan", array("class" => "btn btn-success btn-small", "onclick" => "return confirm('Anda yakin ingin memulai mengerjakan tugas ini?')"));
                        echo "
                                ";
                    }
                    // line 199
                    echo "                            ";
                } else {
                    // line 200
                    echo "                                ";
                    echo anchor(("tugas/nilai/" . $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id")), "<i class=\"icon-flag\"></i> Lihat Nilai", array("class" => "btn btn-info btn-small iframe-lihat-nilai"));
                    echo "
                            ";
                }
                // line 202
                echo "                        ";
            }
            // line 203
            echo "                        </div>
                    </td>
                </tr>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['no'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 207
        echo "            </tbody>
        </table>
        <br>
        ";
        // line 210
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "

    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "list-tugas.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  473 => 210,  468 => 207,  451 => 203,  448 => 202,  442 => 200,  439 => 199,  433 => 197,  430 => 196,  427 => 195,  424 => 194,  418 => 192,  412 => 190,  410 => 189,  406 => 188,  402 => 186,  396 => 184,  390 => 182,  387 => 181,  381 => 179,  378 => 178,  376 => 177,  371 => 174,  367 => 172,  363 => 170,  359 => 168,  357 => 167,  353 => 165,  348 => 163,  345 => 162,  343 => 161,  335 => 160,  331 => 158,  325 => 156,  323 => 155,  320 => 154,  311 => 152,  307 => 151,  302 => 149,  298 => 148,  292 => 145,  288 => 144,  282 => 142,  265 => 141,  232 => 111,  224 => 106,  216 => 100,  209 => 96,  204 => 93,  202 => 92,  196 => 89,  187 => 83,  175 => 74,  167 => 69,  159 => 64,  151 => 58,  145 => 54,  131 => 50,  127 => 48,  123 => 47,  117 => 43,  115 => 42,  110 => 39,  96 => 35,  92 => 33,  88 => 32,  79 => 26,  74 => 23,  68 => 20,  64 => 19,  60 => 18,  57 => 17,  55 => 16,  49 => 13,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
