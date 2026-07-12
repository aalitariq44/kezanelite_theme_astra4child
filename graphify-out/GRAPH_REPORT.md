# Graph Report - astra-child  (2026-07-12)

## Corpus Check
- 18 files · ~84,453 words
- Verdict: corpus is large enough that graph structure adds value.

## Summary
- 37 nodes · 19 edges · 20 communities (18 shown, 2 thin omitted)
- Extraction: 100% EXTRACTED · 0% INFERRED · 0% AMBIGUOUS
- Token cost: 0 input · 0 output

## Graph Freshness
- Built from commit: `b81776f9`
- Run `git rev-parse HEAD` and compare to check if the graph is stale.
- Run `graphify update .` after code changes (no API cost).

## Community Hubs (Navigation)
- دليل توثيق خط حدود الهيدر وتنسيقاته (Header Border and Style Guide)
- 1. سلوك الخط والمشكلة الأصلية (Original Behavior & Issue)
- 2. الحل والتعديلات البرمجية (Implemented Solution)
- graphify.md
- graphify.md

## God Nodes (most connected - your core abstractions)
1. `دليل توثيق خط حدود الهيدر وتنسيقاته (Header Border and Style Guide)` - 5 edges
2. `1. سلوك الخط والمشكلة الأصلية (Original Behavior & Issue)` - 3 edges
3. `2. الحل والتعديلات البرمجية (Implemented Solution)` - 3 edges
4. `graphify` - 1 edges
5. `Workflow: graphify` - 1 edges
6. `كيف كان يعمل الخط؟` - 1 edges
7. `المشكلة:` - 1 edges
8. `أولاً: إلغاء كامل الحدود والظلال الموروثة (CSS Specifity Override)` - 1 edges
9. `ثانياً: تثبيت الحدود والظلال الناعمة على العناصر الداخلية المخصصة` - 1 edges
10. `3. السبب الجذري الحقيقي (Root Cause — Critical!)` - 1 edges

## Surprising Connections (you probably didn't know these)
- None detected - all connections are within the same source files.

## Import Cycles
- None detected.

## Communities (20 total, 2 thin omitted)

### Community 1 - "دليل توثيق خط حدود الهيدر وتنسيقاته (Header Border and Style Guide)"
Cohesion: 0.50
Nodes (3): 3. السبب الجذري الحقيقي (Root Cause — Critical!), 4. إرشادات للتعديلات المستقبلية (Future Modifications Guide), دليل توثيق خط حدود الهيدر وتنسيقاته (Header Border and Style Guide)

### Community 2 - "1. سلوك الخط والمشكلة الأصلية (Original Behavior & Issue)"
Cohesion: 0.67
Nodes (3): 1. سلوك الخط والمشكلة الأصلية (Original Behavior & Issue), المشكلة:, كيف كان يعمل الخط؟

### Community 3 - "2. الحل والتعديلات البرمجية (Implemented Solution)"
Cohesion: 0.67
Nodes (3): 2. الحل والتعديلات البرمجية (Implemented Solution), أولاً: إلغاء كامل الحدود والظلال الموروثة (CSS Specifity Override), ثانياً: تثبيت الحدود والظلال الناعمة على العناصر الداخلية المخصصة

## Knowledge Gaps
- **8 isolated node(s):** `graphify`, `Workflow: graphify`, `كيف كان يعمل الخط؟`, `المشكلة:`, `أولاً: إلغاء كامل الحدود والظلال الموروثة (CSS Specifity Override)` (+3 more)
  These have ≤1 connection - possible missing edges or undocumented components.
- **2 thin communities (<3 nodes) omitted from report** — run `graphify query` to explore isolated nodes.

## Suggested Questions
_Questions this graph is uniquely positioned to answer:_

- **Why does `دليل توثيق خط حدود الهيدر وتنسيقاته (Header Border and Style Guide)` connect `دليل توثيق خط حدود الهيدر وتنسيقاته (Header Border and Style Guide)` to `1. سلوك الخط والمشكلة الأصلية (Original Behavior & Issue)`, `2. الحل والتعديلات البرمجية (Implemented Solution)`?**
  _High betweenness centrality (0.048) - this node is a cross-community bridge._
- **Why does `1. سلوك الخط والمشكلة الأصلية (Original Behavior & Issue)` connect `1. سلوك الخط والمشكلة الأصلية (Original Behavior & Issue)` to `دليل توثيق خط حدود الهيدر وتنسيقاته (Header Border and Style Guide)`?**
  _High betweenness centrality (0.024) - this node is a cross-community bridge._
- **Why does `2. الحل والتعديلات البرمجية (Implemented Solution)` connect `2. الحل والتعديلات البرمجية (Implemented Solution)` to `دليل توثيق خط حدود الهيدر وتنسيقاته (Header Border and Style Guide)`?**
  _High betweenness centrality (0.024) - this node is a cross-community bridge._
- **What connects `graphify`, `Workflow: graphify`, `كيف كان يعمل الخط؟` to the rest of the system?**
  _8 weakly-connected nodes found - possible documentation gaps or missing edges._