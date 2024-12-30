@if (isset($content->hide_section) && $content->hide_section == 'no')
  <section
      class="zigzag-form zigzag-wrapper zigzag-pattern relative py-[72px] text-center @if ($content->extra_class) {!! $content->extra_class !!} @endif "
      @if ($content->id) id="{!! $content->id !!}" @endif>
      {{-- <div class="container-fluid-lg"> --}}
          <div class="title title-capitalize title-green flex items-center gap-[20px] fadeText justify-center pb-40">
              @if (!empty($content->heading))
                  <div class="title title-capitalize fadeText">
                      <h2>{!! $content->heading !!}</h2>
                  </div>
              @endif
          </div>
          @if (!empty($content->shortcode))
              <div class="fadeText">
                {!! do_shortcode($content->shortcode)!!}
              </div>
          @endif
      {{-- </div> --}}
  </section>
@endif
